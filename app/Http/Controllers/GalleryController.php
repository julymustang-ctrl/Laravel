<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function images()
    {
        $galleryImages = [
            [
                'id' => 1,
                'title' => 'Instagram Campaign Design',
                'image' => 'gallery-1.jpg',
                'category' => 'Social Media',
                'categories' => ['social-media'],
                'client' => 'Fashion Brand Co.',
                'project_url' => '#'
            ],
            [
                'id' => 2,
                'title' => 'Brand Identity Package',
                'image' => 'gallery-2.jpg',
                'category' => 'Branding',
                'categories' => ['branding'],
                'client' => 'Tech Startup'
            ],
            [
                'id' => 3,
                'title' => 'Facebook Ad Campaign',
                'image' => 'gallery-3.jpg',
                'category' => 'Advertising',
                'categories' => ['advertising'],
                'client' => 'E-commerce Store'
            ],
            [
                'id' => 4,
                'title' => 'Content Design Series',
                'image' => 'gallery-4.jpg',
                'category' => 'Content Design',
                'categories' => ['content'],
                'client' => 'Restaurant Chain'
            ],
            [
                'id' => 5,
                'title' => 'Holiday Campaign Graphics',
                'image' => 'gallery-5.jpg',
                'category' => 'Campaigns',
                'categories' => ['campaigns'],
                'client' => 'Retail Brand'
            ],
            [
                'id' => 6,
                'title' => 'LinkedIn Company Posts',
                'image' => 'gallery-6.jpg',
                'category' => 'Social Media',
                'categories' => ['social-media'],
                'client' => 'B2B Company'
            ],
            [
                'id' => 7,
                'title' => 'Product Showcase Design',
                'image' => 'gallery-7.jpg',
                'category' => 'Content Design',
                'categories' => ['content'],
                'client' => 'Beauty Brand'
            ],
            [
                'id' => 8,
                'title' => 'Google Ads Creative',
                'image' => 'gallery-8.jpg',
                'category' => 'Advertising',
                'categories' => ['advertising'],
                'client' => 'Service Provider'
            ],
            [
                'id' => 9,
                'title' => 'Logo Design & Branding',
                'image' => 'gallery-9.jpg',
                'category' => 'Branding',
                'categories' => ['branding'],
                'client' => 'New Startup'
            ],
            [
                'id' => 10,
                'title' => 'Summer Campaign 2024',
                'image' => 'gallery-10.jpg',
                'category' => 'Campaigns',
                'categories' => ['campaigns'],
                'client' => 'Travel Agency'
            ]
        ];

        return view('pages.gallery.images', compact('galleryImages'));
    }

    public function videos()
    {
        $featuredVideo = [
            'id' => 1,
            'title' => 'Brand Transformation Success Story',
            'description' => 'See how we helped a local business transform their social media presence and achieve 300% growth in just 6 months.',
            'youtube_id' => 'dQw4w9WgXcQ',
            'category' => 'Case Study',
            'duration' => '3:45',
            'views' => '15K',
            'likes' => '892',
            'date' => 'March 2024'
        ];

        $galleryVideos = [
            [
                'id' => 2,
                'title' => 'Instagram Reels Strategy',
                'description' => 'Learn effective Instagram Reels strategies for maximum engagement.',
                'youtube_id' => 'dQw4w9WgXcQ',
                'thumbnail' => 'video-thumb-1.jpg',
                'category' => 'Educational',
                'categories' => ['social'],
                'duration' => '2:30',
                'views' => '8.5K',
                'likes' => '456',
                'date' => 'Feb 2024',
                'client' => 'Tutorial Series'
            ],
            [
                'id' => 3,
                'title' => 'Product Launch Campaign',
                'description' => 'Behind the scenes of a successful product launch campaign.',
                'youtube_id' => 'dQw4w9WgXcQ',
                'thumbnail' => 'video-thumb-2.jpg',
                'category' => 'Promotional',
                'categories' => ['promotional'],
                'duration' => '4:15',
                'views' => '12K',
                'likes' => '672',
                'date' => 'Jan 2024',
                'client' => 'Tech Company'
            ],
            [
                'id' => 4,
                'title' => 'Client Success Story - Restaurant',
                'description' => 'How we increased foot traffic by 150% for a local restaurant.',
                'youtube_id' => 'dQw4w9WgXcQ',
                'thumbnail' => 'video-thumb-3.jpg',
                'category' => 'Testimonial',
                'categories' => ['testimonial'],
                'duration' => '3:20',
                'views' => '6.2K',
                'likes' => '298',
                'date' => 'Dec 2023',
                'client' => 'Restaurant Chain'
            ],
            [
                'id' => 5,
                'title' => 'Social Media Trends 2024',
                'description' => 'Expert insights on the latest social media marketing trends.',
                'youtube_id' => 'dQw4w9WgXcQ',
                'thumbnail' => 'video-thumb-4.jpg',
                'category' => 'Explainer',
                'categories' => ['explainer'],
                'duration' => '5:45',
                'views' => '18K',
                'likes' => '934',
                'date' => 'Jan 2024'
            ],
            [
                'id' => 6,
                'title' => 'Facebook Ad Campaign Results',
                'description' => 'Breakdown of a successful Facebook advertising campaign.',
                'youtube_id' => 'dQw4w9WgXcQ',
                'thumbnail' => 'video-thumb-5.jpg',
                'category' => 'Campaign',
                'categories' => ['campaign'],
                'duration' => '3:55',
                'views' => '9.8K',
                'likes' => '512',
                'date' => 'Nov 2023',
                'client' => 'E-commerce Brand'
            ],
            [
                'id' => 7,
                'title' => 'Content Creation Process',
                'description' => 'Step-by-step guide to our content creation workflow.',
                'youtube_id' => 'dQw4w9WgXcQ',
                'thumbnail' => 'video-thumb-6.jpg',
                'category' => 'Social Media',
                'categories' => ['social'],
                'duration' => '4:30',
                'views' => '7.3K',
                'likes' => '387',
                'date' => 'Oct 2023'
            ]
        ];

        return view('pages.gallery.videos', compact('featuredVideo', 'galleryVideos'));
    }
}