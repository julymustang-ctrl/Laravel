@extends('layouts.app')

@section('title', 'Our Team - Meet Our Experts')
@section('meta_description', 'Meet our talented team of social media marketing professionals who make your success possible.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Team</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">team members</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Meet our <span>expert team</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Our passionate team of social media experts brings years of experience and creativity to every project.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach($teamMembers as $member)
                <div class="col-lg-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="{{ 0.25 * ($loop->index % 3) }}s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/images/' . $member['image']) }}" alt="{{ $member['name'] }}">
                            </figure>

                            <!-- Team Overlay Start -->
                            <div class="team-overlay">
                                <div class="team-overlay-content">
                                    <h3>{{ $member['name'] }}</h3>
                                    <p>{{ $member['position'] }}</p>
                                    <div class="team-social-links">
                                        @foreach($member['social'] as $platform => $url)
                                        <a href="{{ $url }}"><i class="fa-brands fa-{{ $platform === 'twitter' ? 'x-twitter' : $platform }}"></i></a>
                                        @endforeach
                                    </div>
                                    <a href="{{ route('team.single', $member['id']) }}" class="btn-default btn-small">View Profile</a>
                                </div>
                            </div>
                            <!-- Team Overlay End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="{{ route('team.single', $member['id']) }}">{{ $member['name'] }}</a></h3>
                            <p>{{ $member['position'] }}</p>
                            <div class="team-bio">
                                <p>{{ Str::limit($member['bio'], 100) }}</p>
                            </div>

                            <!-- Team Expertise Start -->
                            <div class="team-expertise">
                                <h5>Expertise:</h5>
                                <div class="expertise-tags">
                                    @foreach(array_slice($member['expertise'], 0, 2) as $skill)
                                    <span class="expertise-tag">{{ $skill }}</span>
                                    @endforeach
                                    @if(count($member['expertise']) > 2)
                                    <span class="expertise-more">+{{ count($member['expertise']) - 2 }} more</span>
                                    @endif
                                </div>
                            </div>
                            <!-- Team Expertise End -->
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Item End -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- Team Stats Section Start -->
    <div class="team-stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our strength</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Team <span>achievements</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp">
                        <div class="stat-number">
                            <h2><span class="counter">15</span>+</h2>
                        </div>
                        <div class="stat-content">
                            <p>Expert Team Members</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="stat-number">
                            <h2><span class="counter">100</span>+</h2>
                        </div>
                        <div class="stat-content">
                            <p>Years Combined Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="stat-number">
                            <h2><span class="counter">50</span>+</h2>
                        </div>
                        <div class="stat-content">
                            <p>Industry Awards Won</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="stat-number">
                            <h2><span class="counter">500</span>+</h2>
                        </div>
                        <div class="stat-content">
                            <p>Successful Campaigns</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Stats Section End -->

    <!-- Join Team CTA Start -->
    <div class="join-team-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Want to join our <span>team?</span></h2>
                        <p class="wow fadeInUp">We're always looking for talented individuals who share our passion for social media marketing.</p>
                        <div class="cta-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="{{ route('contact') }}" class="btn-default">View Open Positions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Join Team CTA End -->
@endsection