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
        Schema::create('course_styles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('category')->default('1'); // Casual, Mathematics, etc.
            $table->string('primary_color')->default('#960000');
            $table->string('secondary_color')->default('#d0acac');
            $table->string('supporting_color_1')->default('#000');
            $table->string('supporting_color_2')->default('#fff');
            $table->string('primary_font_color')->default('#000  ');
            $table->string('secondary_font_color')->default('#444444');
            $table->string('primary_font_family')->default('Raleway');
            $table->string('secondary_font_family')->default('Raleway');
            $table->integer('heading1_font_size')->default(16);
            $table->integer('heading2_font_size')->default(14);
            $table->integer('heading3_font_size')->default(13);
            $table->integer('big_font_size')->default(13);
            $table->integer('medium_font_size')->default(11);
            $table->integer('small_font_size')->default(10);
            $table->integer('very_small_font_size')->default(8);
            $table->text('layout_settings')->nullable();
            $table->string('logo')->nullable();
            $table->string('animated_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('start_logo')->nullable();
            $table->string('course_navigation_placement')->nullable();
            $table->string('lesson_header_style')->nullable();
            $table->string('AI_text_generation')->nullable();
            $table->string('AI_image_generation')->nullable();
            $table->string('course_divider')->nullable();
            $table->string('level')->nullable(); // NEW
            $table->string('tone')->nullable(); // NEW
            $table->string('learning_style')->nullable(); // NEW
            $table->string('verbosity')->nullable(); // NEW
            $table->boolean('citations_required')->default(false); // NEW
            $table->string('visual_style')->nullable(); // NEW
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_styles');
    }
};
