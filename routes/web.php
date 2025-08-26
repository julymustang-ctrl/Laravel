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
