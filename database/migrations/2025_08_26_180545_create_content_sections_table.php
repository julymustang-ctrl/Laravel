<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('content_sections', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // e.g., 'hero_section', 'about_us', 'services_intro'
            $table->string('name'); // Display name for admin panel
            $table->string('type')->default('text'); // text, html, image, gallery
            $table->text('content')->nullable(); // Main content
            $table->json('data')->nullable(); // Additional data (images, links, etc.)
            $table->string('page_context')->nullable(); // Which page(s) this appears on
            $table->boolean('is_global')->default(false); // Appears on multiple pages
            $table->boolean('is_published')->default(true);
            $table->integer('sort_order')->default(0);
            $table->json('seo_data')->nullable(); // Page-specific SEO data
            $table->timestamps();
            
            $table->index(['page_context', 'sort_order']);
            $table->index(['is_global', 'is_published']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_sections');
    }
};
