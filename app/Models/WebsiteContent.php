<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class WebsiteContent extends Model
{
    protected $fillable = [
        'page_name',
        'section_name',
        'content',
        'keywords',
        'file_path',
        'content_type',
        'priority',
    ];

    protected $casts = [
        'priority' => 'integer',
    ];

    /**
     * Find content relevant to a user query
     */
    public static function findRelevant(string $query, int $limit = 20): array
    {
        $queryLower = strtolower($query);
        $queryWords = explode(' ', $queryLower);
        
        // Try full-text search first
        try {
            $results = self::select('*')
                ->whereRaw("MATCH(content, keywords) AGAINST(? IN NATURAL LANGUAGE MODE)", [$query])
                ->limit($limit)
                ->get();
            
            if ($results->isNotEmpty()) {
                return $results->toArray();
            }
        } catch (\Exception $e) {
            // Fallback to LIKE search if full-text fails
        }
        
        // Fallback: Search by keywords and content
        $contentQuery = self::query();
        
        foreach ($queryWords as $word) {
            if (strlen($word) >= 3) {
                $contentQuery->where(function ($q) use ($word) {
                    $q->where('content', 'LIKE', '%' . $word . '%')
                      ->orWhere('keywords', 'LIKE', '%' . $word . '%');
                });
            }
        }
        
        return $contentQuery
            ->orderByDesc('priority')
            ->limit($limit)
            ->get()
            ->toArray();
    }

    /**
     * Get all content grouped by page
     */
    public static function getGroupedByPage(): array
    {
        return self::orderBy('page_name')
            ->orderByDesc('priority')
            ->get()
            ->groupBy('page_name')
            ->toArray();
    }

    /**
     * Get content for a specific page
     */
    public static function getForPage(string $pageName): array
    {
        return self::where('page_name', $pageName)
            ->orderByDesc('priority')
            ->get()
            ->toArray();
    }

    /**
     * Clear all content for a specific page
     */
    public static function clearPage(string $pageName): int
    {
        return self::where('page_name', $pageName)->delete();
    }

    /**
     * Bulk insert content
     */
    public static function bulkInsert(array $contents): void
    {
        self::insert($contents);
    }

    /**
     * Format content for AI prompt
     */
    public static function formatForPrompt(): string
    {
        $grouped = self::getGroupedByPage();
        
        if (empty($grouped)) {
            return "No website content available.";
        }
        
        $output = "WEBSITE CONTENT:\n";
        
        foreach ($grouped as $pageName => $contents) {
            $output .= "\n=== {$pageName} ===\n";
            
            $groupedBySection = collect($contents)->groupBy('section_name');
            
            foreach ($groupedBySection as $section => $items) {
                $output .= "\n[{$section}]\n";
                
                foreach ($items as $item) {
                    $content = trim($item['content']);
                    if (!empty($content)) {
                        $output .= "- {$content}\n";
                    }
                }
            }
        }
        
        return $output;
    }
}