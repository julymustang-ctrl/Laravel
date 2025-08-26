<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Services\ContentHelper;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ContentHelper::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerBladeDirectives();
    }
    
    /**
     * Register custom blade directives
     */
    private function registerBladeDirectives(): void
    {
        // @content('key', 'default')
        Blade::directive('content', function ($expression) {
            return "<?php echo app(\\App\\Services\\ContentHelper::class)::getContent({$expression}); ?>";
        });
        
        // @setting('key', 'default')
        Blade::directive('setting', function ($expression) {
            return "<?php echo app(\\App\\Services\\ContentHelper::class)::getSetting({$expression}); ?>";
        });
        
        // @hasContent('key')
        Blade::directive('hasContent', function ($expression) {
            return "<?php if(app(\\App\\Services\\ContentHelper::class)::hasContent({$expression})): ?>";
        });
        
        // @endhasContent
        Blade::directive('endhasContent', function () {
            return "<?php endif; ?>";
        });
        
        // @contentRaw('key', 'default') - without escaping
        Blade::directive('contentRaw', function ($expression) {
            return "<?php echo app(\\App\\Services\\ContentHelper::class)::getContent({$expression}); ?>";
        });
        
        // @pageContent('page_context')
        Blade::directive('pageContent', function ($expression) {
            return "<?php \$pageContent = app(\\App\\Services\\ContentHelper::class)::getPageContent({$expression}); ?>";
        });
        
        // @globalContent
        Blade::directive('globalContent', function () {
            return "<?php \$globalContent = app(\\App\\Services\\ContentHelper::class)::getGlobalContent(); ?>";
        });
        
        // @publicSettings  
        Blade::directive('publicSettings', function () {
            return "<?php \$settings = app(\\App\\Services\\ContentHelper::class)::getPublicSettings(); ?>";
        });
        
        // @editableContent('key', 'default') - for admin inline editing
        Blade::directive('editableContent', function ($expression) {
            return "<?php \$editableContentData = app(\\App\\Services\\ContentHelper::class)::getEditableContent({$expression}); 
                    echo \$editableContentData['content']; ?>";
        });
        
        // @seoMeta - render SEO meta tags for current page
        Blade::directive('seoMeta', function ($expression = null) {
            return "<?php echo \\App\\Services\\SeoHelper::renderMetaTags({$expression}); ?>";
        });
        
        // @structured data for schema.org
        Blade::directive('schemaData', function ($expression) {
            return "<?php echo \\App\\Services\\SeoHelper::renderSchemaData({$expression}); ?>";
        });
    }
}