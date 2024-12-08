<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LearningUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $learningUnits = [
            // Course 1: e-Business Vision, Mission, and Values
            ['course_id' => 1, 'LU_code' => 'LU1', 'description' => 'Vision, Mission, and Values: An Introduction', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 1, 'LU_code' => 'LU2', 'description' => 'Fundamentals of Vision and Mission Statements: Articulating Organisational Purpose', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 1, 'LU_code' => 'LU3', 'description' => 'A Practical Approach: Developing Data-based Vision, Mission, and Value Statements', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 1, 'LU_code' => 'LU4', 'description' => 'Generating Buy-in: Communicating Vision and Mission Statements', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 1, 'LU_code' => 'LU5', 'description' => 'Continuous Alignment: Reviewing Organisational Vision, Mission, and Values', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 2: Ideation: Creating an eBusiness Opportunity
            ['course_id' => 2, 'LU_code' => 'LU1', 'description' => 'The 5-Step Ideation Process', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 2, 'LU_code' => 'LU2', 'description' => 'Data Analysis: Generating eBusiness Ideas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 2, 'LU_code' => 'LU3', 'description' => 'Consumer Behaviour: Understanding Target Audiences', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 2, 'LU_code' => 'LU4', 'description' => 'Increasing the Probability of Success: Selecting eBusiness Opportunities', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 2, 'LU_code' => 'LU5', 'description' => 'Continuous Improvement: Testing, Feedback, and Revision', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 3: e-Business Brand Management
            ['course_id' => 3, 'LU_code' => 'LU1', 'description' => 'Introduction to Branding: Beyond Logos and Colours', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 3, 'LU_code' => 'LU2', 'description' => 'Research Methods: Brand Differentiation, USP, and Market Analysis', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 3, 'LU_code' => 'LU3', 'description' => 'Functional Cornerstones of Branding: Brand Identity, Personality, and Position', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 3, 'LU_code' => 'LU4', 'description' => 'Establishing Consistency: Building Branding Guidelines', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 3, 'LU_code' => 'LU5', 'description' => 'Brand Equity: Building Brand Value', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 4: Website UI/UX
            ['course_id' => 4, 'LU_code' => 'LU1', 'description' => 'Gathering Information: Guiding UX/UI through Organisational Understanding', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 4, 'LU_code' => 'LU2', 'description' => 'Developing UI/UX Strategy: Understanding Market, Competitors, and Target Audience', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 4, 'LU_code' => 'LU3', 'description' => 'UI/UX Prototyping: Wireframe, Modelling, and Roadmaps for Design', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 4, 'LU_code' => 'LU4', 'description' => 'Execution Strategy: Assessing Development Options of UI/UX Projects', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 4, 'LU_code' => 'LU5', 'description' => 'Measuring ROI of UI/UX Website Projects', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

             // Course 5: EBusiness Management
            ['course_id' => 5, 'LU_code' => 'LU1', 'description' => 'Modern website requirements and development process', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 5, 'LU_code' => 'LU2', 'description' => 'Website technical and user experience requirements', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 5, 'LU_code' => 'LU3', 'description' => 'Website assets selection', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 5, 'LU_code' => 'LU4', 'description' => 'Website implementation', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 5, 'LU_code' => 'LU5', 'description' => 'Website evaluation', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 5, 'LU_code' => 'LU6', 'description' => 'Integration of marketing, branding, and website maintenance', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 6: Photography - People, Food, and Products
            ['course_id' => 6, 'LU_code' => 'LU1', 'description' => 'Introduction to Photography', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 6, 'LU_code' => 'LU2', 'description' => 'Tools of the trade: Technology and its uses', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 6, 'LU_code' => 'LU3', 'description' => 'People, Food, and Products: Genre tools and approaches', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 6, 'LU_code' => 'LU4', 'description' => 'Cinematography: The layered image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 6, 'LU_code' => 'LU5', 'description' => 'Legality and intellectual property: Staying in bounds', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 7: Introduction to Digital Media Production I
            ['course_id' => 7, 'LU_code' => 'LU1', 'description' => 'The Three Phases of Media Production', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 7, 'LU_code' => 'LU2', 'description' => 'The Roles and Responsibilities of Production Crew Members', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 7, 'LU_code' => 'LU3', 'description' => 'The Tools of Media Production', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 7, 'LU_code' => 'LU4', 'description' => 'Context and Criticism: Principles of image-making in the business world', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 7, 'LU_code' => 'LU5', 'description' => 'Technical setting: The finer points', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 8: Introduction to Digital Media Production II
            ['course_id' => 8, 'LU_code' => 'LU1', 'description' => 'Visual Storytelling', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 8, 'LU_code' => 'LU2', 'description' => 'Thinking deeper: Cinematography and subtext', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 8, 'LU_code' => 'LU3', 'description' => 'Developing a signature style: Taste, preference, and character', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 8, 'LU_code' => 'LU4', 'description' => 'The aesthetics of production tools: Developing production value in a professional context', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 8, 'LU_code' => 'LU5', 'description' => 'Impacting the image: Additional sources of meaning in the cinematic image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 8, 'LU_code' => 'LU6', 'description' => 'A professional approach to media aesthetics', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // Course 9: Effective and Compelling Copywriting
            ['course_id' => 9, 'LU_code' => 'LU1', 'description' => 'Principles of Writing and Communication, Copyright', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 9, 'LU_code' => 'LU2', 'description' => 'Grammar Rules', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 9, 'LU_code' => 'LU3', 'description' => 'Editing', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 9, 'LU_code' => 'LU4', 'description' => 'Plagiarism and Copyright, Intellectual Property – Who Owns it?', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 9, 'LU_code' => 'LU5', 'description' => 'Styles', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 10: Managing Typeface and Layout Production
            ['course_id' => 10, 'LU_code' => 'LU1', 'description' => 'Content Management Strategy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 10, 'LU_code' => 'LU2', 'description' => 'Relevant Policies and Guidelines for Web Content', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 10, 'LU_code' => 'LU3', 'description' => 'Web Properties and Assets', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 10, 'LU_code' => 'LU4', 'description' => 'Platforms and Systems', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 11: Video Editing for Social, Web, and Business
            ['course_id' => 11, 'LU_code' => 'LU1', 'description' => 'Introduction to Video Theory', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 11, 'LU_code' => 'LU2', 'description' => 'Preparing for the Edit', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 11, 'LU_code' => 'LU3', 'description' => 'Technical Editing: Best Practices and Approaches', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 11, 'LU_code' => 'LU4', 'description' => 'Advanced Options and Additional Considerations', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 11, 'LU_code' => 'LU5', 'description' => 'Engaging Stakeholders and Finalising the Project', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 12: Wordpress Implementation
            ['course_id' => 12, 'LU_code' => 'LU1', 'description' => 'WordPress Installation', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 12, 'LU_code' => 'LU2', 'description' => 'Theme Selection and Application', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 12, 'LU_code' => 'LU3', 'description' => 'Manage and Maintain WordPress with Plug-ins', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 12, 'LU_code' => 'LU4', 'description' => 'Blogs and Pages', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 12, 'LU_code' => 'LU5', 'description' => 'Other CMS Offerings: Shopify and WIX', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 12, 'LU_code' => 'LU6', 'description' => 'CMS Performance Tuning', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 13: e-Commerce with WooCommerce
            ['course_id' => 13, 'LU_code' => 'LU1', 'description' => 'Introduction to WooCommerce: Essentials for Strategy and Pre-Campaign Launch', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 13, 'LU_code' => 'LU2', 'description' => 'Tools and Techniques for Effective WooCommerce Implementation', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 13, 'LU_code' => 'LU3', 'description' => 'WooCommerce Extensions and Integration', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 13, 'LU_code' => 'LU4', 'description' => 'Campaign Monitoring and Analysis with WooCommerce', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 13, 'LU_code' => 'LU5', 'description' => 'Scaling E-Commerce Campaigns with WooCommerce', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                        // Course 14: e-Business Campaign Management
            ['course_id' => 14, 'LU_code' => 'LU1', 'description' => 'Social Media Marketing Strategy: Setting up for Success', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 14, 'LU_code' => 'LU2', 'description' => 'Operations Planning: Budgeting, Assessment Strategies, and Management Tools', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 14, 'LU_code' => 'LU3', 'description' => 'WooCommerce & Communications: Leveraging the Platform for Social Media, Outreach, and Stakeholders', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 14, 'LU_code' => 'LU4', 'description' => 'Execution Strategy: Launching and Managing E-Commerce Campaigns with WooCommerce', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 14, 'LU_code' => 'LU5', 'description' => 'Analytics, KPIs, and Continuous Improvement', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 15: Social Media Management
            ['course_id' => 15, 'LU_code' => 'LU1', 'description' => 'Introduction to Social Media Management', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 15, 'LU_code' => 'LU2', 'description' => 'Consumer Engagement: Strategies, Tools, and Best Practices', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 15, 'LU_code' => 'LU3', 'description' => 'Social Operations Management: Analytics and Budgeting', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 15, 'LU_code' => 'LU4', 'description' => 'Social Media Engagement: Communications and Community Building', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 15, 'LU_code' => 'LU5', 'description' => 'Measuring Outcomes: Ensuring Effective Practice', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 16: Social Media Advertising
            ['course_id' => 16, 'LU_code' => 'LU1', 'description' => 'Social Media Marketing Strategy: Setting up for Success', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 16, 'LU_code' => 'LU2', 'description' => 'Operations Planning: Budgeting, Assessment Strategies, and Management Tools', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 16, 'LU_code' => 'LU3', 'description' => 'Understanding the Audience: Communities and Consumer Behaviour', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 16, 'LU_code' => 'LU4', 'description' => 'Engagement Strategies: Affiliates, Evangelists, and Social Proof', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 16, 'LU_code' => 'LU5', 'description' => 'Staying Current: Assessing Trends in a Shifting Marketplace', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 17: e-Business Content Management
            ['course_id' => 17, 'LU_code' => 'LU1', 'description' => 'The Importance of Content Management in an E-Business Environment', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 17, 'LU_code' => 'LU2', 'description' => 'The Legalities of Content Creation: Privacy and Legislative Requirements', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 17, 'LU_code' => 'LU3', 'description' => 'Creating a Unified Voice: Establishing Organisation Requirements and Cohesive Tone', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 17, 'LU_code' => 'LU4', 'description' => 'Understanding the Audience: Buyer Personas, Information Needs, and Preferences', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 17, 'LU_code' => 'LU5', 'description' => 'Creating Content with Purpose: Keywords and the Content Calendar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 18, 'LU_code' => 'LU1', 'description' => 'Fundamentals of Technical SEO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 18, 'LU_code' => 'LU2', 'description' => 'Page Speed and Site Structure', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 18, 'LU_code' => 'LU3', 'description' => 'Technical SEO Guidelines', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 18, 'LU_code' => 'LU4', 'description' => 'Website Monitoring Tools', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 18, 'LU_code' => 'LU5', 'description' => 'Website Performance Parameters', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 19: e-Business SEO and SEM
            ['course_id' => 19, 'LU_code' => 'LU1', 'description' => 'Search Engine Optimization: A Closer Look', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 19, 'LU_code' => 'LU2', 'description' => 'Strategic Approaches: Enhancing e-Business Visibility', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 19, 'LU_code' => 'LU3', 'description' => 'Internet Marketing Strategies', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 20: e-Learning Design
            ['course_id' => 20, 'LU_code' => 'LU1', 'description' => 'e-Training Design and Development', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 20, 'LU_code' => 'LU2', 'description' => 'Mentoring in e-Learning', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 20, 'LU_code' => 'LU3', 'description' => 'Assessment Methods and Tools', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 20, 'LU_code' => 'LU4', 'description' => 'On-the-job Training Approaches', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 21: e-Learning Delivery
            ['course_id' => 21, 'LU_code' => 'LU1', 'description' => 'Adult e-Learning Pedagogy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 21, 'LU_code' => 'LU2', 'description' => 'Conducive e-Learning Environments', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 21, 'LU_code' => 'LU3', 'description' => 'e-Learner Types and Behaviours', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 21, 'LU_code' => 'LU4', 'description' => 'e-Training Delivery Methods and Technologies', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 21, 'LU_code' => 'LU5', 'description' => 'Workplace e-Learning Applications', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Course 22: e-Learning Evaluation
            ['course_id' => 22, 'LU_code' => 'LU1', 'description' => 'Introduction to e-Learning Evaluation', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 22, 'LU_code' => 'LU2', 'description' => 'Data Collection and Analysis for e-Learning', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 22, 'LU_code' => 'LU3', 'description' => 'e-Learning Evaluation Tools', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 22, 'LU_code' => 'LU4', 'description' => 'Assessing e-Learning Outcomes', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['course_id' => 22, 'LU_code' => 'LU5', 'description' => 'Report and Review in e-Learning Evaluation', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        // Insert all learning units into the database
        DB::table('learning_units')->insert($learningUnits);
    }
}
