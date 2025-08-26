<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Services\SeoHelper;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate {--force : Force regeneration even if file exists}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml file for SEO';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating sitemap.xml...');
        
        try {
            $sitemapXml = SeoHelper::generateSitemap();
            
            // Save to public directory
            $path = public_path('sitemap.xml');
            file_put_contents($path, $sitemapXml);
            
            $this->info('Sitemap.xml generated successfully at: ' . $path);
            
            // Also save a copy to storage for backup
            Storage::disk('local')->put('sitemap.xml', $sitemapXml);
            
            $this->info('Backup copy saved to storage/app/sitemap.xml');
            
            return Command::SUCCESS;
            
        } catch (\Exception $e) {
            $this->error('Failed to generate sitemap: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
