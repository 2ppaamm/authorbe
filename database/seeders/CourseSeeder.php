<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course; // Ensure the Course model is imported

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'title' => 'e-Business Vision, Mission and Values (Synchronous and Asynchronous)',
            'description' => '1: Understand the process of information gathering for articulating vision, mission and values statements.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Ideation: Creating an eBusiness Opportunity (Synchronous and Asynchronous)',
            'description' => '1: Identify the 5-Step ideation process.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'e-Business Brand Management (Synchronous and Asynchronous)',
            'description' => '1: Understand the core principles and purpose of branding.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Website UI/UX (Synchronous and Asynchronous)',
            'description' => 'This course provides a comprehensive understanding of the user design elements necessary in the creation of effective websites. Specific focus is paid to the purpose of driving engagement of a target audience, increasing conversion and driving revenue generation. This course covers the framework of technical skills needed to collate information and lead a development team, whether in-house or outsourced, to create an engaging and effective website.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'EBusiness Management (Synchronous and Asynchronous)',
            'description' => 'At the end of the course, learners will be able to:',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Photography - People, Food, and Products (Synchronous and Asynchronous)',
            'description' => 'This course enables participants to upskill with digital media technologies, to leverage social media, advertising, and content creation to develop measurable outcomes for their organization. Instructors provide hands-on guidance through project-based learning, maximizing learning outcomes and building real-world skills.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Introduction to Digital Media Production I (Synchronous and Asynchronous)',
            'description' => 'This course enables participants to upskill with digital media technologies, to leverage social media, advertising, and content creation to develop measurable outcomes for their organization. Instructors provide hands-on guidance through project-based learning, maximizing learning outcomes and building real-world skills.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Introduction to Digital Media Production II (Synchronous and Asynchronous)',
            'description' => 'This course focuses on advanced methods, creating unique aesthetics, new shooting methods, formats, and styles, bringing learners\' knowledge and capabilities up to par with professionals in content creation and creative asset production.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Effective and Compelling Copywriting (Synchronous and Asynchronous)',
            'description' => 'With digital marketing at the forefront of every business, copywriting skills are increasingly being sought after.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Managing Typeface and Layout Production (Synchronous and Asynchronous)',
            'description' => 'This course enables participants to upskill with copywriting techniques, specifically focusing on typeface and web content creation. Instructors provide hands-on guidance through project-based learning, maximizing learning outcomes and building real-world skills.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Video Editing for Social, Web, and Business (Synchronous and Asynchronous)',
            'description' => '1: Understand the key concepts of video theory as it pertains to project context, common methodologies, and best practices in approaching different project needs.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Wordpress Implementation (Asynchronous and Synchronous)',
            'description' => '1: Demonstrate the ability to deploy CMS that follows the content management guidelines and policies.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'e-Commerce with WooCommerce (Synchronous and Asynchronous)',
            'description' => '1: Understand and apply the role and uses of WooCommerce applications and extensions in e-commerce strategies.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'e-Business Campaign Management (Synchronous and Asynchronous)',
            'description' => 'Understand the core principles of campaign management and automation.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Social Media Management (Synchronous and Asynchronous)',
            'description' => 'Develop social media guidelines, policies, and procedures.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Social Media Advertising (Synchronous and Asynchronous)',
            'description' => 'Utilize best practices in the development of a social media marketing strategy.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'e-Business Content Management (Synchronous and Asynchronous)',
            'description' => 'With so much content available on the Internet, what is it that makes one stand out from the rest?',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'Website Performance and Technical SEO (Synchronous and Asynchronous)',
            'description' => 'This course covers organic SEO methodologies including on-page and off-page optimization, user experience, SEO web design, domain authority, content ranking factors, mobile best practices, and siloing site architecture.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'e-Business SEO and SEM (Synchronous and Asynchronous)',
            'description' => 'The course is designed to equip learners with web analytics knowledge and SEO methods in detail and focuses on the application of SEO to enhance the visibility of any e-business or organization the learner is managing.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'e-Learning Design (Synchronous and Asynchronous)',
            'description' => 'Understand the key concepts and theories in the relevant knowledge bases (i.e., learning sciences, educational psychology; adult learning, instructional science; human-computer interaction).',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'e-Learning Delivery (Synchronous and Asynchronous)',
            'description' => 'Understand adult e-learning pedagogy and e-training delivery.',
            'user_id' => 1,
        ]);

        Course::create([
            'title' => 'e-Learning Evaluation (Synchronous and Asynchronous)',
            'description' => 'Understand what e-learning evaluation is and its role in educating in an e-learning environment.',
            'user_id' => 1,
        ]);
    }
}