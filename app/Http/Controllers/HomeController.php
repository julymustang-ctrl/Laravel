<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.index');
    }

    public function indexImage()
    {
        return view('pages.home.index-image');
    }

    public function indexSlider()
    {
        return view('pages.home.index-slider');
    }

    public function index2()
    {
        return view('pages.home.index-2');
    }

    public function pricing()
    {
        $pricingPlans = [
            [
                'id' => 1,
                'name' => 'Basic Plan',
                'price' => 29,
                'description' => 'Start at $29 included 3 client',
                'features' => [
                    'Social Media Management',
                    'Content Creation',
                    'Basic Analytics',
                    'Email Support'
                ]
            ],
            [
                'id' => 2,
                'name' => 'Pro Plan',
                'price' => 39,
                'description' => 'Start at $39 included 5 client',
                'features' => [
                    'Advanced Social Media Management',
                    'Premium Content Creation',
                    'Advanced Analytics',
                    'Priority Support',
                    'Custom Strategy'
                ]
            ]
        ];

        return view('pages.pricing', compact('pricingPlans'));
    }

    public function testimonials()
    {
        $testimonials = [
            [
                'id' => 1,
                'name' => 'Sarah Johnson',
                'position' => 'Marketing Director',
                'company' => 'Tech Solutions Inc.',
                'rating' => 5,
                'testimonial' => 'Working with this team transformed our social media presence completely. Our engagement rates increased by 200% within just 3 months.',
                'image' => 'team-1.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Michael Chen',
                'position' => 'CEO',
                'company' => 'StartupXYZ',
                'rating' => 5,
                'testimonial' => 'The strategic approach and creative content they provided helped us reach our target audience effectively.',
                'image' => 'team-2.jpg'
            ]
        ];

        return view('pages.testimonials', compact('testimonials'));
    }

    public function faqs()
    {
        $faqs = [
            [
                'id' => 1,
                'question' => 'What social media platforms do you manage?',
                'answer' => 'We manage all major social media platforms including Facebook, Instagram, Twitter, LinkedIn, TikTok, and YouTube.'
            ],
            [
                'id' => 2,
                'question' => 'How do you measure social media success?',
                'answer' => 'We track key metrics such as engagement rates, reach, impressions, click-through rates, conversions, and ROI to measure campaign effectiveness.'
            ],
            [
                'id' => 3,
                'question' => 'Do you provide content creation services?',
                'answer' => 'Yes, we offer comprehensive content creation including graphics, videos, copywriting, and photography tailored to your brand.'
            ],
            [
                'id' => 4,
                'question' => 'What is your typical turnaround time for projects?',
                'answer' => 'Project timelines vary depending on scope, but typically range from 2-4 weeks for strategy development and 24-48 hours for content creation.'
            ],
            [
                'id' => 5,
                'question' => 'Do you offer monthly reporting?',
                'answer' => 'Yes, we provide detailed monthly reports showing performance metrics, insights, and recommendations for optimization.'
            ]
        ];

        return view('pages.faqs', compact('faqs'));
    }
}
