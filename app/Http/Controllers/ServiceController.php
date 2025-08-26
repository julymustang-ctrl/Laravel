<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'id' => 1,
                'title' => 'Strategy Development',
                'description' => 'Comprehensive social media strategies tailored to your business goals.',
                'icon' => 'icon-service-1.svg',
                'features' => ['Market Research', 'Competitor Analysis', 'Goal Setting']
            ],
            [
                'id' => 2,
                'title' => 'Account Management',
                'description' => 'Professional management of your social media accounts across platforms.',
                'icon' => 'icon-service-2.svg',
                'features' => ['Daily Posting', 'Community Management', 'Brand Monitoring']
            ],
            [
                'id' => 3,
                'title' => 'Analytics and Reporting',
                'description' => 'Detailed insights and performance tracking for your campaigns.',
                'icon' => 'icon-service-3.svg',
                'features' => ['Performance Metrics', 'ROI Analysis', 'Monthly Reports']
            ],
            [
                'id' => 4,
                'title' => 'Research and Optimization',
                'description' => 'Continuous improvement of your social media presence.',
                'icon' => 'icon-service-4.svg',
                'features' => ['A/B Testing', 'Content Optimization', 'Trend Analysis']
            ],
            [
                'id' => 5,
                'title' => 'Content Creation',
                'description' => 'Creative and engaging content for your social media channels.',
                'icon' => 'icon-service-5.svg',
                'features' => ['Graphic Design', 'Video Production', 'Copywriting']
            ],
            [
                'id' => 6,
                'title' => 'Paid Advertising',
                'description' => 'Strategic social media advertising campaigns for maximum ROI.',
                'icon' => 'icon-service-6.svg',
                'features' => ['Campaign Setup', 'Audience Targeting', 'Budget Optimization']
            ]
        ];

        return view('pages.services', compact('services'));
    }

    public function show($id)
    {
        $services = [
            [
                'id' => 1,
                'title' => 'Social Media Management',
                'slug' => 'social-media-management',
                'description' => 'Complete social media management services to grow your online presence.',
                'detailed_description' => 'Our comprehensive social media management service helps businesses build and maintain a strong online presence across all major platforms. We create engaging content, manage community interactions, and develop strategic campaigns that drive real business results.',
                'image' => 'service-1.jpg',
                'category' => 'Social Media',
                'rating' => 4.9,
                'reviews_count' => 127,
                'duration' => '2-4 weeks',
                'price_range' => '$500 - $2000',
                'team_size' => '3-5 experts',
                'features' => [
                    [
                        'icon' => 'fas fa-chart-line',
                        'title' => 'Analytics & Reporting',
                        'description' => 'Comprehensive analytics and monthly reporting to track performance and ROI.'
                    ],
                    [
                        'icon' => 'fas fa-users',
                        'title' => 'Community Management',
                        'description' => 'Active community management to engage with your audience and build relationships.'
                    ],
                    [
                        'icon' => 'fas fa-calendar-alt',
                        'title' => 'Content Planning',
                        'description' => 'Strategic content calendar planning to ensure consistent and engaging posts.'
                    ],
                    [
                        'icon' => 'fas fa-headset',
                        'title' => '24/7 Support',
                        'description' => 'Round-the-clock support to handle any issues or questions that arise.'
                    ]
                ],
                'process' => [
                    [
                        'title' => 'Discovery & Research',
                        'description' => 'We start by understanding your business, target audience, and competitors to develop the right strategy.'
                    ],
                    [
                        'title' => 'Strategy Development',
                        'description' => 'Create a comprehensive strategy tailored to your specific goals and objectives.'
                    ],
                    [
                        'title' => 'Implementation',
                        'description' => 'Execute the strategy with professional content creation and campaign management.'
                    ],
                    [
                        'title' => 'Monitor & Optimize',
                        'description' => 'Continuously monitor performance and optimize campaigns for better results.'
                    ]
                ],
                'benefits' => [
                    'Increase brand awareness and visibility',
                    'Drive more qualified traffic to your website',
                    'Generate more leads and conversions',
                    'Build stronger relationships with customers',
                    'Stay ahead of competitors',
                    'Improve customer loyalty and retention'
                ],
                'faq' => [
                    [
                        'question' => 'How long does it take to see results?',
                        'answer' => 'Typically, you can expect to see initial results within 2-4 weeks, with more significant improvements after 2-3 months of consistent effort.'
                    ],
                    [
                        'question' => 'What platforms do you work with?',
                        'answer' => 'We work with all major social media platforms including Facebook, Instagram, Twitter, LinkedIn, TikTok, and YouTube.'
                    ],
                    [
                        'question' => 'Do you provide content creation?',
                        'answer' => 'Yes, we provide complete content creation services including graphics, videos, copywriting, and photography.'
                    ]
                ]
            ],
            [
                'id' => 2,
                'title' => 'Content Creation',
                'slug' => 'content-creation',
                'description' => 'Professional content creation for all your marketing needs.',
                'detailed_description' => 'Professional content creation service that includes graphic design, copywriting, video production, and photography. We create compelling content that resonates with your target audience and drives engagement.',
                'image' => 'service-2.jpg',
                'category' => 'Content',
                'rating' => 4.8,
                'reviews_count' => 95,
                'duration' => '1-3 weeks',
                'price_range' => '$300 - $1500',
                'team_size' => '2-4 experts'
            ]
        ];
        
        $service = collect($services)->firstWhere('id', (int)$id);
        
        if (!$service) {
            abort(404);
        }

        // Get related services
        $relatedServices = collect($services)->where('id', '!=', (int)$id)->take(3)->toArray();
        
        // Get related projects (mock data)
        $relatedProjects = [
            [
                'id' => 1,
                'title' => 'Social Media Campaign',
                'category' => 'Marketing',
                'image' => 'project-1.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Brand Identity Design',
                'category' => 'Branding',
                'image' => 'project-2.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Content Creation',
                'category' => 'Content',
                'image' => 'project-3.jpg'
            ]
        ];

        return view('pages.service-single', compact('service', 'relatedServices', 'relatedProjects'));
    }
}
