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
        Schema::create('content_history', function (Blueprint $table) {
            $table->id();
            $table->morphs('contentable'); // Polymorphic relation to any content type
            $table->json('old_data'); // Previous content state
            $table->json('new_data'); // New content state
            $table->string('action'); // created, updated, deleted
            $table->text('reason')->nullable(); // Reason for change
            $table->unsignedBigInteger('admin_user_id');
            $table->timestamps();
            
            $table->foreign('admin_user_id')->references('id')->on('admin_users')->onDelete('cascade');
            $table->index(['created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_history');
    }
};
