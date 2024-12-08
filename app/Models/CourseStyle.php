<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStyle extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'category',
        'primary_color',
        'secondary_color',
        'supporting_color_1',
        'supporting_color_2',
        'primary_font_color',
        'secondary_font_color',
        'primary_font_family',
        'secondary_font_family',
        'heading1_font_size',
        'heading2_font_size',
        'heading3_font_size',
        'big_font_size',
        'medium_font_size',
        'small_font_size',
        'very_small_font_size',
        'layout_settings',
        'logo',
        'animated_logo',
        'favicon',
        'start_logo',
        'course_navigation_placement',
        'lesson_header_style',
        'AI_text_generation',
        'AI_image_generation',
        'course_divider',
        'level',
        'tone',
        'learning_style',
        'verbosity',
        'citations_required',
        'visual_style',
    ];
}
