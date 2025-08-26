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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Display name
            $table->string('slug')->unique(); // URL slug
            $table->string('route_name')->unique(); // Laravel route name
            $table->string('title'); // Page title
            $table->text('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->json('open_graph')->nullable(); // OG tags
            $table->json('twitter_card')->nullable(); // Twitter card data
            $table->json('schema_markup')->nullable(); // Schema.org data
            $table->boolean('is_published')->default(true);
            $table->boolean('include_in_sitemap')->default(true);
            $table->integer('sitemap_priority')->default(5); // 1-10
            $table->enum('sitemap_frequency', ['always', 'hourly', 'daily', 'weekly', 'monthly', 'yearly', 'never'])->default('weekly');
            $table->timestamps();
            
            $table->index(['is_published', 'include_in_sitemap']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
