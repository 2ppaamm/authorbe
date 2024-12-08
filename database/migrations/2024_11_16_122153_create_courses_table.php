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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Visual and template-related fields
            $table->string('thumbnail_url')->nullable(); // Removed ->after()
            $table->string('cover_image_url')->nullable();
            $table->unsignedBigInteger('template_id')->nullable();
            $table->string('theme_color')->nullable();
            $table->string('font_family')->nullable();

            // Author and collaborators
            $table->string('author_name')->nullable();
            $table->json('collaborators')->nullable();

            // Timestamps
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
