<?php

namespace App\Services;

use App\Models\WebsiteContent;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ContentExtractor
{
    protected string $viewsPath;
    protected array $excludePatterns = [
        '#vendor/#',
        '#node_modules/#',
        '#_components_#',
        '#layouts#',
    ];
    
    protected array $sectionPatterns = [
        'hero' => ['hero', 'banner', 'header', 'intro'],
        'about' => ['about', 'company', 'who we are'],
        'services' => ['services', 'what we do', 'solutions'],
        'team' => ['team', 'our people', 'leadership'],
        'contact' => ['contact', 'reach us', 'get in touch'],
        'footer' => ['footer', 'links', 'copyright'],
        'testimonials' => ['testimonial', 'review', 'what they say'],
        'partners' => ['partner', 'client', 'our partners'],
        'pricing' => ['pricing', 'cost', 'fee'],
        'faq' => ['faq', 'question', 'help'],
    ];

    public function __construct()
    {
        $this->viewsPath = base_path('resources/views');
    }

    /**
     * Extract content from all Blade files
     */
    public function extractAll(bool $clearExisting = false): array
    {
        $results = [
            'files_scanned' => 0,
            'content_extracted' => 0,
            'pages_processed' => [],
            'errors' => [],
        ];

        // Find all Blade files
        $bladeFiles = $this->findBladeFiles();
        
        foreach ($bladeFiles as $file) {
            try {
                $result = $this->extractFromFile($file, $clearExisting);
                $results['files_scanned']++;
                $results['content_extracted'] += $result['extracted'];
                $results['pages_processed'][] = $result['page_name'];
            } catch (\Exception $e) {
                $results['errors'][] = [
                    'file' => $file,
                    'error' => $e->getMessage(),
                ];
                Log::error("Content extraction error for {$file}: " . $e->getMessage());
            }
        }

        return $results;
    }

    /**
     * Extract content from a single Blade file
     */
    public function extractFromFile(string $filePath, bool $clearExisting = false): array
    {
        $relativePath = str_replace($this->viewsPath . DIRECTORY_SEPARATOR, '', $filePath);
        $pageName = $this->extractPageName($relativePath);
        $sectionName = $this->detectSection($relativePath);

        // Clear existing content for this page if requested
        if ($clearExisting) {
            WebsiteContent::clearPage($pageName);
        }

        $content = File::get($filePath);
        $extractedItems = $this->parseContent($content, $pageName, $sectionName, $relativePath);

        // Bulk insert extracted content
        if (!empty($extractedItems)) {
            WebsiteContent::bulkInsert($extractedItems);
        }

        return [
            'page_name' => $pageName,
            'extracted' => count($extractedItems),
        ];
    }

    /**
     * Find all Blade files in the views directory
     */
    protected function findBladeFiles(): array
    {
        $files = [];
        
        $viewsPath = $this->viewsPath;
        
        Log::info("ContentExtractor: Searching in {$viewsPath}");
        
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($viewsPath, \RecursiveDirectoryIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $filePath = $file->getPathname();
                $fileName = $file->getFilename();
                
                Log::info("Found file: {$filePath} | Extension: {$file->getExtension()}");
                
                // Check for .blade.php files (file name contains .blade.php)
                if (str_contains($fileName, '.blade.php')) {
                    Log::info("Blade file found: {$filePath}");
                    
                    // Skip excluded patterns
                    $skip = false;
                    foreach ($this->excludePatterns as $pattern) {
                        if (preg_match($pattern, $filePath)) {
                            $skip = true;
                            break;
                        }
                    }
                    
                    if (!$skip) {
                        $files[] = $filePath;
                    }
                }
            }
        }

        Log::info("ContentExtractor: Total blade files found: " . count($files));
        
        return $files;
    }

    /**
     * Extract page name from file path
     */
    protected function extractPageName(string $path): string
    {
        // Remove extension
        $name = pathinfo($path, PATHINFO_FILENAME);
        
        // Convert camelCase or kebab-case to readable format
        $name = preg_replace('/([a-z])([A-Z])/', '$1 $2', $name);
        $name = preg_replace('/[-_]/', ' ', $name);
        $name = ucwords($name);
        
        // Handle special cases
        $name = str_replace('Blade', '', $name);
        
        return trim($name) ?: 'Unknown Page';
    }

    /**
     * Detect section based on file path
     */
    protected function detectSection(string $path): string
    {
        $pathLower = strtolower($path);
        
        foreach ($this->sectionPatterns as $section => $keywords) {
            foreach ($keywords as $keyword) {
                if (str_contains($pathLower, $keyword)) {
                    return ucfirst($section);
                }
            }
        }
        
        return 'General';
    }

    /**
     * Parse Blade content and extract text
     */
    protected function parseContent(string $content, string $pageName, string $section, string $filePath): array
    {
        $items = [];

        // Remove Blade directives and PHP code
        $content = $this->stripBladeDirectives($content);
        $content = $this->stripPhpCode($content);

        // Extract headings (h1-h6)
        $items = array_merge($items, $this->extractHeadings($content, $pageName, $section, $filePath));

        // Extract paragraphs
        $items = array_merge($items, $this->extractParagraphs($content, $pageName, $section, $filePath));

        // Extract list items
        $items = array_merge($items, $this->extractListItems($content, $pageName, $section, $filePath));

        // Extract button/link text
        $items = array_merge($items, $this->extractLinks($content, $pageName, $section, $filePath));

        return $items;
    }

    /**
     * Strip Blade directives from content
     */
    protected function stripBladeDirectives(string $content): string
    {
        $patterns = [
            '/\{\{.*?\}\}/s',           // {{ }} expressions
            '/\{\!!.*?!!\}/s',          // {!! !!} expressions
            '/@[\w]+(\([^)]*\))?/',     // @directives
            '/<\?php.*?\?>/s',          // PHP tags
        ];

        foreach ($patterns as $pattern) {
            $content = preg_replace($pattern, ' ', $content);
        }

        return $content;
    }

    /**
     * Strip PHP code blocks
     */
    protected function stripPhpCode(string $content): string
    {
        // Remove PHP tags and their content
        $content = preg_replace('/<\?php[\s\S]*?\?>/i', ' ', $content);
        $content = preg_replace('/<%[\s\S]*?%>/', ' ', $content);
        
        return $content;
    }

    /**
     * Extract headings (h1-h6)
     */
    protected function extractHeadings(string $content, string $pageName, string $section, string $filePath): array
    {
        $items = [];
        
        if (preg_match_all('/<h([1-6])[^>]*>([\s\S]*?)<\/h\1>/i', $content, $matches)) {
            foreach ($matches[0] as $index => $heading) {
                $text = strip_tags($heading);
                $text = trim($text);
                
                if (!empty($text) && strlen($text) > 2) {
                    $items[] = [
                        'page_name' => $pageName,
                        'section_name' => $section,
                        'content' => $text,
                        'keywords' => $this->generateKeywords($text),
                        'file_path' => $filePath,
                        'content_type' => 'heading',
                        'priority' => $this->getHeadingPriority($matches[1][$index]),
                        'last_extracted' => now(),
                    ];
                }
            }
        }

        // Also extract class-based headings (Tailwind patterns)
        if (preg_match_all('/class="[^"]*(?:text-|font-)[^"]*">\s*([^<]+)/', $content, $matches)) {
            foreach ($matches[1] as $text) {
                $text = trim($text);
                if (!empty($text) && strlen($text) > 3 && !in_array($text, array_column($items, 'content'))) {
                    $items[] = [
                        'page_name' => $pageName,
                        'section_name' => $section,
                        'content' => $text,
                        'keywords' => $this->generateKeywords($text),
                        'file_path' => $filePath,
                        'content_type' => 'heading',
                        'priority' => 5,
                        'last_extracted' => now(),
                    ];
                }
            }
        }

        return $items;
    }

    /**
     * Extract paragraphs
     */
    protected function extractParagraphs(string $content, string $pageName, string $section, string $filePath): array
    {
        $items = [];

        if (preg_match_all('/<p[^>]*>([\s\S]*?)<\/p>/i', $content, $matches)) {
            foreach ($matches[1] as $text) {
                $text = trim(strip_tags($text));
                
                // Skip short or placeholder text
                if (strlen($text) > 20 && !$this->isPlaceholder($text)) {
                    $items[] = [
                        'page_name' => $pageName,
                        'section_name' => $section,
                        'content' => $text,
                        'keywords' => $this->generateKeywords($text),
                        'file_path' => $filePath,
                        'content_type' => 'paragraph',
                        'priority' => 3,
                        'last_extracted' => now(),
                    ];
                }
            }
        }

        return $items;
    }

    /**
     * Extract list items
     */
    protected function extractListItems(string $content, string $pageName, string $section, string $filePath): array
    {
        $items = [];

        // Extract li items
        if (preg_match_all('/<li[^>]*>([\s\S]*?)<\/li>/i', $content, $matches)) {
            foreach ($matches[1] as $text) {
                $text = trim(strip_tags($text));
                
                if (strlen($text) > 3 && !$this->isPlaceholder($text)) {
                    $items[] = [
                        'page_name' => $pageName,
                        'section_name' => $section,
                        'content' => $text,
                        'keywords' => $this->generateKeywords($text),
                        'file_path' => $filePath,
                        'content_type' => 'list_item',
                        'priority' => 2,
                        'last_extracted' => now(),
                    ];
                }
            }
        }

        return $items;
    }

    /**
     * Extract link/button text
     */
    protected function extractLinks(string $content, string $pageName, string $section, string $filePath): array
    {
        $items = [];

        // Extract anchor text
        if (preg_match_all('/<a[^>]*>([\s\S]*?)<\/a>/i', $content, $matches)) {
            foreach ($matches[1] as $text) {
                $text = trim(strip_tags($text));
                
                if (strlen($text) > 2 && !$this->isPlaceholder($text) && !preg_match('/^https?:\/\//', $text)) {
                    $items[] = [
                        'page_name' => $pageName,
                        'section_name' => $section,
                        'content' => $text,
                        'keywords' => $this->generateKeywords($text),
                        'file_path' => $filePath,
                        'content_type' => 'link',
                        'priority' => 1,
                        'last_extracted' => now(),
                    ];
                }
            }
        }

        // Extract button text
        if (preg_match_all('/<button[^>]*>([\s\S]*?)<\/button>/i', $content, $matches)) {
            foreach ($matches[1] as $text) {
                $text = trim(strip_tags($text));
                
                if (strlen($text) > 2) {
                    $items[] = [
                        'page_name' => $pageName,
                        'section_name' => $section,
                        'content' => $text,
                        'keywords' => $this->generateKeywords($text),
                        'file_path' => $filePath,
                        'content_type' => 'button',
                        'priority' => 1,
                        'last_extracted' => now(),
                    ];
                }
            }
        }

        return $items;
    }

    /**
     * Generate keywords from text
     */
    protected function generateKeywords(string $text): string
    {
        // Remove common words
        $stopWords = ['the', 'a', 'an', 'and', 'or', 'but', 'in', 'on', 'at', 'to', 'for', 'of', 'with', 'by', 'is', 'are', 'was', 'were', 'be', 'been', 'being', 'have', 'has', 'had', 'do', 'does', 'did', 'will', 'would', 'could', 'should', 'may', 'might', 'must', 'shall', 'can', 'this', 'that', 'these', 'those', 'it', 'its'];
        
        // Extract words
        preg_match_all('/\b[a-zA-Z]{3,}\b/', strtolower($text), $words);
        
        // Filter stop words and get unique
        $keywords = array_diff($words[0], $stopWords);
        $keywords = array_unique($keywords);
        
        return implode(', ', $keywords);
    }

    /**
     * Check if text is a placeholder
     */
    protected function isPlaceholder(string $text): bool
    {
        $placeholders = ['click here', 'read more', 'learn more', 'submit', 'send', 'enter', 'type here', 'placeholder'];
        
        foreach ($placeholders as $placeholder) {
            if (str_contains(strtolower($text), $placeholder)) {
                return true;
            }
        }
        
        return false;
    }

    /**
     * Get heading priority based on level
     */
    protected function getHeadingPriority(int $level): int
    {
        return match($level) {
            1 => 10,
            2 => 8,
            3 => 6,
            4 => 4,
            5, 6 => 2,
            default => 5,
        };
    }
}