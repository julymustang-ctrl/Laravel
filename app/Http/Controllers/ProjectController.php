<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'Brand Awareness Campaign',
                'category' => 'Social Media',
                'image' => 'project-1.jpg',
                'description' => 'Increased brand awareness by 300% through strategic social media campaigns.'
            ],
            [
                'id' => 2,
                'title' => 'E-commerce Growth',
                'category' => 'Digital Marketing',
                'image' => 'project-2.jpg',
                'description' => 'Boosted online sales by 250% with targeted social media advertising.'
            ],
            [
                'id' => 3,
                'title' => 'Community Building',
                'category' => 'Engagement',
                'image' => 'project-3.jpg',
                'description' => 'Built an engaged community of 50k+ followers across platforms.'
            ],
            [
                'id' => 4,
                'title' => 'Influencer Partnership',
                'category' => 'Collaboration',
                'image' => 'project-4.jpg',
                'description' => 'Successful influencer collaborations resulting in viral content.'
            ],
            [
                'id' => 5,
                'title' => 'Video Marketing',
                'category' => 'Content Creation',
                'image' => 'project-5.jpg',
                'description' => 'Created viral video content with millions of views.'
            ],
            [
                'id' => 6,
                'title' => 'Crisis Management',
                'category' => 'Reputation',
                'image' => 'project-6.jpg',
                'description' => 'Successfully managed brand reputation during challenging times.'
            ]
        ];

        return view('pages.projects', compact('projects'));
    }

    public function show($id)
    {
        $project = [
            'id' => $id,
            'title' => 'Brand Awareness Campaign',
            'category' => 'Social Media Marketing',
            'client' => 'TechStart Inc.',
            'date' => '2024-01-15',
            'image' => 'project-1.jpg',
            'description' => 'A comprehensive social media campaign that increased brand awareness and engagement.',
            'challenge' => 'The client needed to increase brand visibility in a competitive market.',
            'solution' => 'We developed a multi-platform strategy focusing on engaging content and targeted advertising.',
            'results' => [
                '300% increase in brand awareness',
                '250% growth in social media followers',
                '180% improvement in engagement rates',
                '150% increase in website traffic'
            ],
            'gallery' => [
                'gallery-1.jpg',
                'gallery-2.jpg',
                'gallery-3.jpg',
                'gallery-4.jpg'
            ]
        ];

        return view('pages.project-single', compact('project'));
    }
}
