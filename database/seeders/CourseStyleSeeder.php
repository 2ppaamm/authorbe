<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseStyle;

class CourseStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseStyles = [
            [
                'course_id' => 1,
                'category' => 'Casual',
                'primary_color' => '#007bff',
                'secondary_color' => '#6c757d',
                'supporting_color_1' => '#f8f9fa',
                'supporting_color_2' => '#e9ecef',
                'primary_font_color' => '#000000',
                'secondary_font_color' => '#ffffff',
                'primary_font_family' => 'Arial, sans-serif',
                'secondary_font_family' => 'Georgia, serif',
                'heading1_font_size' => 32,
                'heading2_font_size' => 28,
                'heading3_font_size' => 24,
                'big_font_size' => 20,
                'medium_font_size' => 16,
                'small_font_size' => 14,
                'very_small_font_size' => 12,
                'layout_settings' => json_encode(['margin' => '10px', 'padding' => '15px']),
                'logo' => 'logo1.png',
                'animated_logo' => 'animated_logo1.gif',
                'favicon' => 'favicon1.ico',
                'start_logo' => 'start_logo1.png',
                'course_navigation_placement' => 'left',
                'lesson_header_style' => 'modern',
                'AI_text_generation' => 'enabled',
                'AI_image_generation' => 'enabled',
                'course_divider' => 'solid',
                'level' => 'Intermediate',
                'tone' => 'Friendly',
                'learning_style' => 'Visual',
                'verbosity' => 'Concise',
                'citations_required' => true,
                'visual_style' => 'Minimalist',
            ],
            [
                'course_id' => 2,
                'category' => 'Professional',
                'primary_color' => '#123456',
                'secondary_color' => '#abcdef',
                'supporting_color_1' => '#ffeedd',
                'supporting_color_2' => '#112233',
                'primary_font_color' => '#333333',
                'secondary_font_color' => '#666666',
                'primary_font_family' => 'Roboto, sans-serif',
                'secondary_font_family' => 'Times New Roman, serif',
                'heading1_font_size' => 36,
                'heading2_font_size' => 30,
                'heading3_font_size' => 26,
                'big_font_size' => 22,
                'medium_font_size' => 18,
                'small_font_size' => 14,
                'very_small_font_size' => 12,
                'layout_settings' => json_encode(['margin' => '20px', 'padding' => '10px']),
                'logo' => 'logo2.png',
                'animated_logo' => 'animated_logo2.gif',
                'favicon' => 'favicon2.ico',
                'start_logo' => 'start_logo2.png',
                'course_navigation_placement' => 'top',
                'lesson_header_style' => 'classic',
                'AI_text_generation' => 'enabled',
                'AI_image_generation' => 'disabled',
                'course_divider' => 'dotted',
                'level' => 'Advanced',
                'tone' => 'Formal',
                'learning_style' => 'Auditory',
                'verbosity' => 'Detailed',
                'citations_required' => false,
                'visual_style' => 'Professional',
            ],
        ];

        foreach ($courseStyles as $style) {
            CourseStyle::create($style);
        }
    }
}
