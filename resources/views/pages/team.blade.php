@extends('layouts.app')

@section('title', 'Our Team - Meet Our Experts')
@section('meta_description', 'Meet our talented team of social media marketing professionals who make your success possible.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>team</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">our team</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker subpages-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="{{ asset('assets/images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-6.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-6.svg') }}" alt=""></span>
            </div>

            <div class="scrolling-content">
                <span><img src="{{ asset('assets/images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-6.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-6.svg') }}" alt=""></span>
            </div>
        </div>
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- Page Team Start -->
    <div class="page-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('team.single', 'cameron-williamson') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/team-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
        
                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('team.single', 'cameron-williamson') }}">Cameron Williamson</a></h3>
                                <p>Social Media Manager</p>
                            </div>
                            <!-- Team Content End -->
            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            
                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('team.single', 'savannah-nguyen') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/team-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
        
                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('team.single', 'savannah-nguyen') }}">Savannah Nguyen</a></h3>
                                <p>Influencer Marketing Coordinator</p>
                            </div>
                            <!-- Team Content End -->
            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            
                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('team.single', 'leslie-alexander') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/team-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
        
                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('team.single', 'leslie-alexander') }}">Leslie Alexander</a></h3>
                                <p>Digital Marketing Manager</p>
                            </div>
                            <!-- Team Content End -->
            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('team.single', 'cameron-williamson-2') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/team-4.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
        
                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('team.single', 'cameron-williamson-2') }}">Cameron Williamson</a></h3>
                                <p>Social Media Manager</p>
                            </div>
                            <!-- Team Content End -->
            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            
                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('team.single', 'savannah-nguyen-2') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/team-5.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
        
                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('team.single', 'savannah-nguyen-2') }}">Savannah Nguyen</a></h3>
                                <p>Influencer Marketing Coordinator</p>
                            </div>
                            <!-- Team Content End -->
            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            
                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('team.single', 'leslie-alexander-2') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/team-6.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
        
                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('team.single', 'leslie-alexander-2') }}">Leslie Alexander</a></h3>
                                <p>Digital Marketing Manager</p>
                            </div>
                            <!-- Team Content End -->
            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Team End -->
@endsection