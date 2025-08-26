<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $teamMembers = [
            [
                'name' => 'Sarah Mitchell',
                'position' => 'Marketing Director',
                'image' => 'team-1.jpg',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'name' => 'Michael Chen',
                'position' => 'Creative Director',
                'image' => 'team-2.jpg',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'name' => 'Emily Rodriguez',
                'position' => 'Social Media Strategist',
                'image' => 'team-3.jpg',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#'
                ]
            ]
        ];

        return view('pages.about', compact('teamMembers'));
    }
}
