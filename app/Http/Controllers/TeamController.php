<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = [
            [
                'id' => 1,
                'name' => 'Sarah Mitchell',
                'position' => 'Marketing Director',
                'image' => 'team-1.jpg',
                'bio' => 'Sarah leads our marketing team with over 10 years of experience in social media strategy.',
                'expertise' => ['Social Media Strategy', 'Brand Management', 'Team Leadership'],
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 2,
                'name' => 'Michael Chen',
                'position' => 'Creative Director',
                'image' => 'team-2.jpg',
                'bio' => 'Michael brings creativity and innovation to every project with his design expertise.',
                'expertise' => ['Graphic Design', 'Video Production', 'Creative Strategy'],
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 3,
                'name' => 'Emily Rodriguez',
                'position' => 'Social Media Strategist',
                'image' => 'team-3.jpg',
                'bio' => 'Emily specializes in developing comprehensive social media strategies for our clients.',
                'expertise' => ['Content Strategy', 'Analytics', 'Platform Management'],
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 4,
                'name' => 'David Kim',
                'position' => 'Analytics Specialist',
                'image' => 'team-4.jpg',
                'bio' => 'David ensures our campaigns deliver measurable results through data-driven insights.',
                'expertise' => ['Data Analysis', 'Performance Tracking', 'ROI Optimization'],
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 5,
                'name' => 'Lisa Thompson',
                'position' => 'Content Creator',
                'image' => 'team-5.jpg',
                'bio' => 'Lisa creates engaging content that resonates with audiences across all platforms.',
                'expertise' => ['Content Writing', 'Photography', 'Video Editing'],
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'id' => 6,
                'name' => 'Alex Johnson',
                'position' => 'Community Manager',
                'image' => 'team-6.jpg',
                'bio' => 'Alex builds and nurtures online communities, fostering engagement and loyalty.',
                'expertise' => ['Community Building', 'Customer Engagement', 'Crisis Management'],
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#'
                ]
            ]
        ];

        return view('pages.team', compact('teamMembers'));
    }

    public function show($id)
    {
        $teamMember = [
            'id' => $id,
            'name' => 'Sarah Mitchell',
            'position' => 'Marketing Director',
            'image' => 'team-1.jpg',
            'bio' => 'Sarah leads our marketing team with over 10 years of experience in social media strategy and brand management. She has helped dozens of companies transform their digital presence.',
            'experience' => '10+ years',
            'education' => 'MBA in Marketing, Harvard Business School',
            'expertise' => ['Social Media Strategy', 'Brand Management', 'Team Leadership', 'Digital Marketing'],
            'achievements' => [
                'Led campaigns that generated over $10M in revenue',
                'Increased client engagement rates by average of 300%',
                'Managed teams of up to 15 marketing professionals',
                'Speaker at 20+ industry conferences'
            ],
            'social' => [
                'facebook' => '#',
                'twitter' => '#',
                'linkedin' => '#',
                'instagram' => '#'
            ]
        ];

        return view('pages.team-single', compact('teamMember'));
    }
}
