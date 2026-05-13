<?php

namespace App\Console\Commands;

use App\Services\ContentExtractor;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExtractContentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'content:extract {--clear : Clear existing content before extracting}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Extract content from all Blade files in the resources/views directory';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Starting content extraction...');
        
        $viewsPath = base_path('resources/views');
        $this->info('Scanning: ' . $viewsPath);
        
        // Debug: List all files directly
        $allFiles = [];
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($viewsPath, \RecursiveDirectoryIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $allFiles[] = $file->getPathname();
            }
        }
        
        $bladeFiles = array_filter($allFiles, function($f) {
            return str_contains($f, '.blade.php');
        });
        
        $this->info('Total PHP files found: ' . count($allFiles));
        $this->info('Blade files found: ' . count($bladeFiles));
        
        if (count($bladeFiles) > 0) {
            $this->line('Sample files:');
            foreach (array_slice($bladeFiles, 0, 5) as $file) {
                $this->line('  - ' . $file);
            }
        }
        
        $extractor = new ContentExtractor();
        $clear = $this->option('clear');
        
        $results = $extractor->extractAll($clear);
        
        $this->newLine();
        $this->info('=== Extraction Results ===');
        $this->info("Files scanned: {$results['files_scanned']}");
        $this->info("Content extracted: {$results['content_extracted']}");
        
        $this->newLine();
        $this->info('Pages processed:');
        foreach (array_unique($results['pages_processed']) as $page) {
            $this->line("  - {$page}");
        }
        
        if (!empty($results['errors'])) {
            $this->newLine();
            $this->warn('Errors encountered:');
            foreach ($results['errors'] as $error) {
                $this->line("  - {$error['file']}: {$error['error']}");
            }
        }
        
        $this->newLine();
        $this->info('Content extraction complete!');
        $this->info('AI chatbot can now access all website content.');
        
        return Command::SUCCESS;
    }
}