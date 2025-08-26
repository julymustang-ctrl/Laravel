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
        Schema::create('media_files', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Original filename
            $table->string('filename'); // Stored filename
            $table->string('path'); // Storage path
            $table->string('disk')->default('public'); // Storage disk
            $table->string('mime_type');
            $table->integer('size'); // File size in bytes
            $table->integer('width')->nullable(); // Image width
            $table->integer('height')->nullable(); // Image height
            $table->string('alt_text')->nullable(); // SEO alt text
            $table->string('title')->nullable(); // Image title
            $table->string('category')->nullable(); // Image category/type
            $table->json('metadata')->nullable(); // Additional image metadata
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('uploaded_by')->nullable();
            $table->timestamps();
            
            $table->foreign('uploaded_by')->references('id')->on('admin_users')->onDelete('set null');
            $table->index(['category', 'is_active']);
            $table->index(['width', 'height']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_files');
    }
};
