<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsletterController;

// Admin Panel Controllers
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\SettingsController;

// Admin Authentication Routes (Accessible without authentication)
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest admin routes
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
        Route::get('/reset-password', [AdminAuthController::class, 'showResetForm'])->name('password.reset');
        Route::post('/reset-password', [AdminAuthController::class, 'resetPassword'])->name('password.reset.submit');
    });
    
    // Authenticated admin routes
    Route::middleware('auth:admin')->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::post('/dashboard/clear-cache', [DashboardController::class, 'clearCache'])->name('dashboard.clear-cache');
        Route::get('/dashboard/system-info', [DashboardController::class, 'systemInfo'])->name('dashboard.system-info');
        
        // Authentication
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/profile', [AdminAuthController::class, 'showProfile'])->name('profile');
        Route::put('/profile', [AdminAuthController::class, 'updateProfile'])->name('profile.update');
        
        // Content Management
        Route::resource('content', ContentController::class)->names([
            'index' => 'content.index',
            'create' => 'content.create',
            'store' => 'content.store',
            'show' => 'content.show',
            'edit' => 'content.edit',
            'update' => 'content.update',
            'destroy' => 'content.destroy'
        ]);
        
        // Additional Content Routes
        Route::prefix('content')->name('content.')->group(function () {
            Route::get('/page/{pageContext}', [ContentController::class, 'byPage'])->name('by-page');
            Route::post('/{contentSection}/toggle-publish', [ContentController::class, 'togglePublish'])->name('toggle-publish');
            Route::post('/{contentSection}/duplicate', [ContentController::class, 'duplicate'])->name('duplicate');
            Route::post('/{contentSection}/restore/{history}', [ContentController::class, 'restore'])->name('restore');
            Route::post('/bulk-action', [ContentController::class, 'bulkAction'])->name('bulk-action');
        });
        
        // Media Management
        Route::resource('media', MediaController::class)->names([
            'index' => 'media.index',
            'create' => 'media.create',
            'store' => 'media.store',
            'show' => 'media.show',
            'edit' => 'media.edit',
            'update' => 'media.update',
            'destroy' => 'media.destroy'
        ]);
        
        // Additional Media Routes
        Route::prefix('media')->name('media.')->group(function () {
            Route::post('/{mediaFile}/replace', [MediaController::class, 'replace'])->name('replace');
            Route::post('/bulk-action', [MediaController::class, 'bulkAction'])->name('bulk-action');
        });
        
        // Pages Management (SEO)
        Route::resource('pages', \App\Http\Controllers\Admin\PageController::class)->names([
            'index' => 'pages.index',
            'create' => 'pages.create',
            'store' => 'pages.store',
            'show' => 'pages.show',
            'edit' => 'pages.edit',
            'update' => 'pages.update',
            'destroy' => 'pages.destroy'
        ]);
        
        // Settings Management (Super Admin only)
        Route::resource('settings', SettingsController::class)->names([
            'index' => 'settings.index',
            'create' => 'settings.create',
            'store' => 'settings.store',
            'show' => 'settings.show',
            'edit' => 'settings.edit',
            'update' => 'settings.update',
            'destroy' => 'settings.destroy'
        ]);
        
        // Additional Settings Routes
        Route::prefix('settings')->name('settings.')->group(function () {
            Route::post('/bulk-update', [SettingsController::class, 'bulkUpdate'])->name('bulk-update');
            Route::get('/seo', [SettingsController::class, 'seo'])->name('seo');
            Route::post('/seo', [SettingsController::class, 'updateSeo'])->name('seo.update');
            Route::post('/sitemap/generate', [SettingsController::class, 'generateSitemap'])->name('sitemap.generate');
            Route::get('/users', [SettingsController::class, 'users'])->name('users');
            Route::post('/users', [SettingsController::class, 'createUser'])->name('users.create');
            Route::put('/users/{user}', [SettingsController::class, 'updateUser'])->name('users.update');
            Route::delete('/users/{user}', [SettingsController::class, 'deleteUser'])->name('users.delete');
            Route::get('/cache', [SettingsController::class, 'cache'])->name('cache');
            Route::post('/cache/clear', [SettingsController::class, 'clearCache'])->name('cache.clear');
        });
    });
});

// Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home-image', [HomeController::class, 'indexImage'])->name('home.image');
Route::get('/home-slider', [HomeController::class, 'indexSlider'])->name('home.slider');
Route::get('/index-2', [HomeController::class, 'index2'])->name('home.index2');

// About Routes
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Service Routes
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.single');

// Project Routes
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.single');

// Team Routes
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/team/{id}', [TeamController::class, 'show'])->name('team.single');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.single');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Gallery Routes
Route::get('/gallery/images', [GalleryController::class, 'images'])->name('gallery.image');
Route::get('/gallery/videos', [GalleryController::class, 'videos'])->name('gallery.video');

// Other Pages
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');

// Newsletter Subscription
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
