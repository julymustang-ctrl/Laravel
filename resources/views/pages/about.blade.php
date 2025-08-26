@extends('layouts.app')

@section('title', 'About Us - Artistic Social Media Marketing Agency')
@section('meta_description', 'Learn about our experienced team and our mission to help brands succeed through social media.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">About <span>Us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- About Box Start -->
                    <div class="about-us-box">
                        <!-- About Us Images Start -->
                        <div class="about-us-image">
                            <!-- About Us Image Start -->
                            <div class="about-us-img">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/about-us-image.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image End -->

                            <!-- About Experience Box Start -->
                            <div class="about-experience-box">
                                <div class="about-experience-counter">
                                    <h2><span class="counter">25</span>+</h2>
                                </div>
                                <div class="about-experience-content wow fadeInUp">
                                    <p>Years of experience <span>Social media marketing</span></p>
                                </div>
                            </div>
                            <!-- About Experience Box End -->
                        </div>
                        <!-- About Us Images End -->

                        <!-- About Us Content Start -->
                        <div class="about-us-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">About us</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Transforming brands with <span>social media</span></h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- About Us Body Start -->
                            <div class="about-us-body wow fadeInUp" data-wow-delay="0.2s">
                                <p>Revolutionizing Brand Identity Through Creative Social Media Strategies That Drive Engagement, Build Connections, and Deliver Results Empowering Businesses to Stand Out, Reach Their Audience, and Achieve Their Goals.</p>
                            </div>
                            <!-- About Us Body End -->

                            <!-- About Us Footer Start -->
                            <div class="about-us-footer wow fadeInUp" data-wow-delay="0.4s">
                                <!-- About Us Button Start -->
                                <div class="about-us-btn">
                                    <a href="{{ route('contact') }}" class="btn-default">contact us</a>
                                </div>
                                <!-- About Us Button End -->

                                <!-- About Author Info Start -->
                                <div class="about-author-info">
                                    <!-- About Author Image Start -->
                                    <div class="about-author-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/author-image.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- About Author Image End -->

                                    <!-- About Author Content Start -->
                                    <div class="about-author-content">
                                        <h3>sarah mitchell</h3>
                                        <p>marketing director</p>
                                    </div>
                                    <!-- About Author Content End -->
                                </div>
                                <!-- About Author Info End -->
                            </div>
                            <!-- About Us Footer End -->

                            <!-- About Us List Start -->
                            <div class="about-us-list">
                                @foreach(['tailored marketing solutions', 'proactive trends tracking', 'affordable packages'] as $index => $item)
                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp" data-wow-delay="{{ 0.2 * $index }}s">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-about-list-item-' . ($index + 1) . '.svg') }}" alt="">
                                    </div>
                                    <div class="about-list-content">
                                        <h3>{{ $item }}</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->
                                @endforeach
                            </div>
                            <!-- About Us List End -->
                        </div>
                        <!-- About Us Content End -->
                    </div>
                    <!-- About Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Team members</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Meet our <span>expert team</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach($teamMembers as $member)
                <div class="col-lg-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="{{ 0.25 * $loop->index }}s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/images/' . $member['image']) }}" alt="{{ $member['name'] }}">
                            </figure>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="{{ route('team.single', $member['name']) }}">{{ $member['name'] }}</a></h3>
                            <p>{{ $member['position'] }}</p>

                            <!-- Team Social Links Start -->
                            <div class="team-social-links">
                                @foreach($member['social'] as $platform => $url)
                                <a href="{{ $url }}"><i class="fa-brands fa-{{ $platform }}"></i></a>
                                @endforeach
                            </div>
                            <!-- Team Social Links End -->
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
@endsection