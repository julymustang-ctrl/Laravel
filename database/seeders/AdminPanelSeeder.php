<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminUser;
use App\Models\ContentSection;
use App\Models\Page;
use App\Models\SiteSetting;

class AdminPanelSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        // Create admin users
        $this->createAdminUsers();
        
        // Create site settings
        $this->createSiteSettings();
        
        // Create pages
        $this->createPages();
        
        // Create content sections
        $this->createContentSections();
    }
    
    /**
     * Create admin users
     */
    private function createAdminUsers()
    {
        // Super Admin
        AdminUser::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'),
                'role' => 'super_admin',
                'is_active' => true,
            ]
        );
        
        // Regular Admin
        AdminUser::updateOrCreate(
            ['email' => 'manager@example.com'],
            [
                'name' => 'Content Manager',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'is_active' => true,
            ]
        );
        
        echo "✓ Admin users created\n";
    }
    
    /**
     * Create site settings
     */
    private function createSiteSettings()
    {
        $settings = [
            // SEO Settings
            [
                'key' => 'site_title',
                'value' => 'Your Site Name',
                'type' => 'text',
                'group' => 'seo',
                'label' => 'Site Title',
                'description' => 'The main title of your website',
                'is_public' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'site_description',
                'value' => 'A professional website built with Laravel',
                'type' => 'textarea',
                'group' => 'seo',
                'label' => 'Site Description',
                'description' => 'Default meta description for your website',
                'is_public' => true,
                'sort_order' => 2
            ],
            [
                'key' => 'site_keywords',
                'value' => 'laravel, web development, professional services',
                'type' => 'textarea',
                'group' => 'seo',
                'label' => 'Site Keywords',
                'description' => 'Default meta keywords for your website',
                'is_public' => true,
                'sort_order' => 3
            ],
            [
                'key' => 'google_analytics_id',
                'value' => '',
                'type' => 'text',
                'group' => 'seo',
                'label' => 'Google Analytics ID',
                'description' => 'Your Google Analytics tracking ID (e.g., GA-XXXXXXXX-X)',
                'is_public' => true,
                'sort_order' => 4
            ],
            
            // General Settings
            [
                'key' => 'company_name',
                'value' => 'Your Company Name',
                'type' => 'text',
                'group' => 'general',
                'label' => 'Company Name',
                'description' => 'Your company or organization name',
                'is_public' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'contact_email',
                'value' => 'contact@example.com',
                'type' => 'text',
                'group' => 'general',
                'label' => 'Contact Email',
                'description' => 'Primary contact email address',
                'is_public' => true,
                'sort_order' => 2
            ],
            [
                'key' => 'contact_phone',
                'value' => '+1 (555) 123-4567',
                'type' => 'text',
                'group' => 'general',
                'label' => 'Contact Phone',
                'description' => 'Primary contact phone number',
                'is_public' => true,
                'sort_order' => 3
            ],
            [
                'key' => 'company_address',
                'value' => '123 Business Street, City, State 12345',
                'type' => 'textarea',
                'group' => 'general',
                'label' => 'Company Address',
                'description' => 'Your business address',
                'is_public' => true,
                'sort_order' => 4
            ],
            
            // Social Media
            [
                'key' => 'facebook_url',
                'value' => '',
                'type' => 'text',
                'group' => 'social',
                'label' => 'Facebook URL',
                'description' => 'Your Facebook page URL',
                'is_public' => true,
                'sort_order' => 1
            ],
            [
                'key' => 'twitter_url',
                'value' => '',
                'type' => 'text',
                'group' => 'social',
                'label' => 'Twitter URL',
                'description' => 'Your Twitter profile URL',
                'is_public' => true,
                'sort_order' => 2
            ],
            [
                'key' => 'linkedin_url',
                'value' => '',
                'type' => 'text',
                'group' => 'social',
                'label' => 'LinkedIn URL',
                'description' => 'Your LinkedIn profile or company page URL',
                'is_public' => true,
                'sort_order' => 3
            ],
            [
                'key' => 'instagram_url',
                'value' => '',
                'type' => 'text',
                'group' => 'social',
                'label' => 'Instagram URL',
                'description' => 'Your Instagram profile URL',
                'is_public' => true,
                'sort_order' => 4
            ],
        ];
        
        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
        
        echo "✓ Site settings created\n";
    }
    
    /**
     * Create pages
     */
    private function createPages()
    {
        $pages = [
            [
                'name' => 'Home Page',
                'title' => 'Home',
                'slug' => 'home',
                'route_name' => 'home',
                'meta_description' => 'Welcome to our professional website. We provide excellent services and solutions.',
                'meta_keywords' => json_encode(['home', 'services', 'professional', 'solutions']),
                'is_published' => true,
                'include_in_sitemap' => true,
                'sitemap_priority' => 10,
                'sitemap_frequency' => 'weekly',
                'open_graph' => json_encode([
                    'title' => 'Home - Your Site Name',
                    'description' => 'Welcome to our professional website',
                    'image' => '/images/og-home.jpg'
                ])
            ],
            [
                'name' => 'About Us Page',
                'title' => 'About Us',
                'slug' => 'about',
                'route_name' => 'about',
                'meta_description' => 'Learn more about our company, our mission, and our team.',
                'meta_keywords' => json_encode(['about', 'company', 'mission', 'team']),
                'is_published' => true,
                'include_in_sitemap' => true,
                'sitemap_priority' => 8,
                'sitemap_frequency' => 'monthly'
            ],
            [
                'name' => 'Services Page',
                'title' => 'Services',
                'slug' => 'services',
                'route_name' => 'services',
                'meta_description' => 'Discover our comprehensive range of professional services.',
                'meta_keywords' => json_encode(['services', 'professional', 'solutions']),
                'is_published' => true,
                'include_in_sitemap' => true,
                'sitemap_priority' => 9,
                'sitemap_frequency' => 'weekly'
            ],
            [
                'name' => 'Projects Page',
                'title' => 'Projects',
                'slug' => 'projects',
                'route_name' => 'projects',
                'meta_description' => 'View our portfolio of successful projects and case studies.',
                'meta_keywords' => json_encode(['projects', 'portfolio', 'case studies']),
                'is_published' => true,
                'include_in_sitemap' => true,
                'sitemap_priority' => 7,
                'sitemap_frequency' => 'monthly'
            ],
            [
                'name' => 'Contact Page',
                'title' => 'Contact',
                'slug' => 'contact',
                'route_name' => 'contact',
                'meta_description' => 'Get in touch with us. We\'d love to hear from you.',
                'meta_keywords' => json_encode(['contact', 'get in touch', 'reach us']),
                'is_published' => true,
                'include_in_sitemap' => true,
                'sitemap_priority' => 6,
                'sitemap_frequency' => 'monthly'
            ]
        ];
        
        foreach ($pages as $page) {
            Page::updateOrCreate(
                ['slug' => $page['slug']],
                $page
            );
        }
        
        echo "✓ Pages created\n";
    }
    
    /**
     * Create content sections
     */
    private function createContentSections()
    {
        $contentSections = [
            // Global sections
            [
                'name' => 'Site Header Logo',
                'key' => 'header_logo',
                'type' => 'image',
                'content' => '/images/logo.png',
                'page_context' => null,
                'is_global' => true,
                'is_published' => true,
                'sort_order' => 1,
                'data' => [
                    'alt_text' => 'Company Logo',
                    'max_width' => 200,
                    'max_height' => 80
                ]
            ],
            [
                'name' => 'Site Footer Text',
                'key' => 'footer_text',
                'type' => 'text',
                'content' => '© 2024 Your Company Name. All rights reserved.',
                'page_context' => null,
                'is_global' => true,
                'is_published' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Contact CTA Button',
                'key' => 'contact_cta',
                'type' => 'html',
                'content' => '<a href="/contact" class="btn btn-primary">Get In Touch</a>',
                'page_context' => null,
                'is_global' => true,
                'is_published' => true,
                'sort_order' => 3
            ],
            
            // Home page sections
            [
                'name' => 'Hero Section Title',
                'key' => 'home_hero_title',
                'type' => 'text',
                'content' => 'Welcome to Our Professional Services',
                'page_context' => 'home',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Hero Section Subtitle',
                'key' => 'home_hero_subtitle',
                'type' => 'text',
                'content' => 'We provide excellent solutions for your business needs',
                'page_context' => 'home',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Hero Section Description',
                'key' => 'home_hero_description',
                'type' => 'html',
                'content' => '<p>Our team of experienced professionals is dedicated to delivering high-quality services that help your business grow and succeed in today\'s competitive market.</p>',
                'page_context' => 'home',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 3
            ],
            [
                'name' => 'Hero Background Image',
                'key' => 'home_hero_bg',
                'type' => 'image',
                'content' => '/images/hero-bg.jpg',
                'page_context' => 'home',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 4,
                'data' => [
                    'alt_text' => 'Hero Background',
                    'max_width' => 1920,
                    'max_height' => 1080
                ]
            ],
            
            // About page sections
            [
                'name' => 'About Us Title',
                'key' => 'about_title',
                'type' => 'text',
                'content' => 'About Our Company',
                'page_context' => 'about',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'About Us Content',
                'key' => 'about_content',
                'type' => 'html',
                'content' => '<p>We are a team of passionate professionals dedicated to providing exceptional services to our clients. With years of experience in the industry, we have built a reputation for delivering results that exceed expectations.</p><p>Our mission is to help businesses achieve their goals through innovative solutions and personalized service. We believe in building long-term relationships with our clients based on trust, reliability, and mutual success.</p>',
                'page_context' => 'about',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Company Stats',
                'key' => 'company_stats',
                'type' => 'json',
                'content' => json_encode([
                    [
                        'label' => 'Years of Experience',
                        'value' => '10+',
                        'icon' => 'calendar'
                    ],
                    [
                        'label' => 'Happy Clients',
                        'value' => '500+',
                        'icon' => 'users'
                    ],
                    [
                        'label' => 'Projects Completed',
                        'value' => '1000+',
                        'icon' => 'check'
                    ],
                    [
                        'label' => 'Team Members',
                        'value' => '25+',
                        'icon' => 'team'
                    ]
                ]),
                'page_context' => 'about',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 3
            ],
            
            // Services page sections
            [
                'name' => 'Services Page Title',
                'key' => 'services_title',
                'type' => 'text',
                'content' => 'Our Professional Services',
                'page_context' => 'services',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Services Introduction',
                'key' => 'services_intro',
                'type' => 'html',
                'content' => '<p>We offer a comprehensive range of professional services designed to help your business succeed. Our experienced team is committed to delivering exceptional results.</p>',
                'page_context' => 'services',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 2
            ],
            
            // Contact page sections
            [
                'name' => 'Contact Page Title',
                'key' => 'contact_title',
                'type' => 'text',
                'content' => 'Get In Touch',
                'page_context' => 'contact',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Contact Introduction',
                'key' => 'contact_intro',
                'type' => 'html',
                'content' => '<p>We\'d love to hear from you. Send us a message and we\'ll respond as soon as possible.</p>',
                'page_context' => 'contact',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Office Hours',
                'key' => 'office_hours',
                'type' => 'html',
                'content' => '<div class="office-hours"><h4>Office Hours</h4><p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p></div>',
                'page_context' => 'contact',
                'is_global' => false,
                'is_published' => true,
                'sort_order' => 3
            ]
        ];
        
        foreach ($contentSections as $section) {
            ContentSection::updateOrCreate(
                ['key' => $section['key']],
                $section
            );
        }
        
        echo "✓ Content sections created\n";
    }
}