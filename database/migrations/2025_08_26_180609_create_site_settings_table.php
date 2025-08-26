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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // Setting key
            $table->text('value')->nullable(); // Setting value
            $table->string('type')->default('text'); // text, json, boolean, number
            $table->string('group')->default('general'); // Settings group
            $table->string('label'); // Display label for admin
            $table->text('description')->nullable(); // Help text
            $table->boolean('is_public')->default(false); // Can be accessed in frontend
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            
            $table->index(['group', 'sort_order']);
            $table->index(['is_public']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
