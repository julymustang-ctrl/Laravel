<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'id' => 1,
                'title' => '10 Social Media Trends for 2024',
                'excerpt' => 'Discover the latest trends that will shape social media marketing this year.',
                'image' => 'post-1.jpg',
                'author' => 'Sarah Mitchell',
                'date' => '2024-01-15',
                'category' => 'Trends',
                'reading_time' => '5 min read'
            ],
            [
                'id' => 2,
                'title' => 'How to Create Engaging Visual Content',
                'excerpt' => 'Learn the secrets of creating visual content that captures attention.',
                'image' => 'post-2.jpg',
                'author' => 'Michael Chen',
                'date' => '2024-01-10',
                'category' => 'Content Creation',
                'reading_time' => '7 min read'
            ],
            [
                'id' => 3,
                'title' => 'Measuring Social Media ROI Effectively',
                'excerpt' => 'A comprehensive guide to measuring the return on investment of your campaigns.',
                'image' => 'post-3.jpg',
                'author' => 'Emily Rodriguez',
                'date' => '2024-01-05',
                'category' => 'Analytics',
                'reading_time' => '6 min read'
            ],
            [
                'id' => 4,
                'title' => 'Building Brand Communities Online',
                'excerpt' => 'Strategies for creating loyal communities around your brand.',
                'image' => 'post-4.jpg',
                'author' => 'Sarah Mitchell',
                'date' => '2023-12-28',
                'category' => 'Community',
                'reading_time' => '8 min read'
            ],
            [
                'id' => 5,
                'title' => 'The Power of User-Generated Content',
                'excerpt' => 'How to leverage content created by your audience for better engagement.',
                'image' => 'post-5.jpg',
                'author' => 'Michael Chen',
                'date' => '2023-12-20',
                'category' => 'Strategy',
                'reading_time' => '4 min read'
            ],
            [
                'id' => 6,
                'title' => 'Social Media Crisis Management',
                'excerpt' => 'Best practices for handling negative situations on social media.',
                'image' => 'post-6.jpg',
                'author' => 'Emily Rodriguez',
                'date' => '2023-12-15',
                'category' => 'Management',
                'reading_time' => '9 min read'
            ]
        ];

        return view('pages.blog', compact('posts'));
    }

    public function show($id)
    {
        $post = [
            'id' => $id,
            'title' => '10 Social Media Trends for 2024',
            'content' => 'Social media continues to evolve at a rapid pace, and staying ahead of the trends is crucial for successful marketing campaigns. In this comprehensive guide, we explore the top 10 trends that will shape social media marketing in 2024.',
            'image' => 'post-1.jpg',
            'author' => 'Sarah Mitchell',
            'author_image' => 'team-1.jpg',
            'author_bio' => 'Sarah is our Marketing Director with over 10 years of experience in social media marketing.',
            'date' => '2024-01-15',
            'category' => 'Trends',
            'reading_time' => '5 min read',
            'tags' => ['Social Media', 'Trends', 'Marketing', 'Digital']
        ];

        return view('pages.blog-single', compact('post'));
    }
}
