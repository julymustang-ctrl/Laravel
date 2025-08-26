@extends('layouts.app')

@section('title', 'About Us - Artistic Social Media Marketing Agency')
@section('meta_description', 'Learn about our experienced team and our mission to help brands succeed through social media.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">About <span>us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
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

    <!-- About Us Section Start -->
    <div class="about-us page-about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- About Box Start -->
                    <div class="about-us-box">
                        <div class="about-us-image">
                            <!-- About Us Image Start -->
                            <div class="about-us-img">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/about-us-image.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image End -->

                            <div class="about-experience-box">
                                <div class="about-experience-counter">
                                    <h2><span class="counter">25</span>+</h2>
                                </div>

                                <div class="about-experience-content">
                                    <p>Years of experience <span>Social media marketing</span></p>
                                </div>
                            </div>
                        </div>

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
                                <p>Revolutionizing Brand Identity Through Creative Social Media Strategies That Drive Engagement, Build Connections, and Deliver Results Empowering Businesses to Stand Out, Reach Their Audience.</p>
                            </div>
                            <!-- About Us Body End -->

                            <!-- About Us Footer Start -->
                            <div class="about-us-footer wow fadeInUp" data-wow-delay="0.4s">
                                <!-- About Us Button Start -->
                                <div class="about-us-btn">
                                    <a href="{{ route('about') }}" class="btn-default">more about</a>
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
                            <div class="about-us-list wow fadeInUp" data-wow-delay="0.6s">
                                <!-- About List Item Start -->
                                <div class="about-list-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-about-list-item-1.svg') }}" alt="">
                                    </div>

                                    <div class="about-list-content">
                                        <h3>tailored marketing solutions</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->

                                <!-- About List Item Start -->
                                <div class="about-list-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-about-list-item-2.svg') }}" alt="">
                                    </div>

                                    <div class="about-list-content">
                                        <h3>proactive trends tracking</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->

                                <!-- About List Item Start -->
                                <div class="about-list-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-about-list-item-3.svg') }}" alt="">
                                    </div>

                                    <div class="about-list-content">
                                        <h3>affordable packages</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->
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

    <!-- Our Approach Section Start -->
    <div class="our-approach">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Approach Content Start -->
                    <div class="our-approach-content">
                        <!-- Section Tite Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our approach</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Strategic <span>approach</span> to social success</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our strategic approach combines innovative planning, data-driven insights, creative execution to help your brand thrive on social media. We focus on building meaningful connections, boosting engagement, and driving measurable results.</p>
                        </div>
                        <!-- Section Tite End -->
                        
                        <!-- Our Approach Box Start -->
                        <div class="our-approach-box">
                            <!-- Our Approach Item Start -->
                            <div class="our-approach-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-mission.svg') }}" alt="">
                                </div>
                                <div class="approach-item-content">
                                    <h3>Our Mission</h3>
                                    <p>Our mission is to businesses to thrive in the age by harnessing the full potential of social </p>
                                </div>
                            </div>
                            <!-- Our Approach Item End -->

                            <!-- Our Approach Item Start -->
                            <div class="our-approach-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-vision.svg') }}" alt="">
                                </div>
                                <div class="approach-item-content">
                                    <h3>Our vision</h3>
                                    <p>Our vision is to businesses to thrive in the age by harnessing the full potential of social </p>
                                </div>
                            </div>
                            <!-- Our Approach Item End -->
                        </div>
                        <!-- Our Approach Box End -->
                    </div>
                    <!-- Our Approach Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Approach Images Start -->
                    <div class="our-approach-images">
                        <!-- Approach Image Box Start -->
                        <div class="approach-image-box-1">
                            <div class="our-approach-img">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/approach-img-1.jpg') }}" alt="">
                                </figure>
                            </div>

                            <div class="our-approach-img">
                                <figure  class="image-anime reveal">
                                    <img src="{{ asset('assets/images/approach-img-2.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Approach Image Box End -->

                        <!-- Approach Image Box Start -->
                        <div class="approach-image-box-2">
                            <div class="our-approach-img">
                                <figure  class="image-anime reveal">
                                    <img src="{{ asset('assets/images/approach-img-3.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Approach Image Box End -->
                         
                        <!-- Approach Image Circle Start -->
                        <div class="approach-image-circle">
                            <img src="{{ asset('assets/images/approach-image-circle.png') }}" alt="">
                        </div>
                        <!-- Approach Image Circle End -->
                    </div>
                    <!-- Our Approach Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Why choose us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Creative <span>social</span> strategies</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('contact') }}" class="btn-default">contact us</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 order-lg-1 order-1">
                    <!-- Why Choose List Start -->
                    <div class="why-choose-list">
                        <!-- Why Choose List Item Start -->
                        <div class="why-choose-list-item wow fadeInUp">
                            <h3>tailored strategies</h3>
                            <p>We create customized social media strategies that align with your brand's unique goals and values.</p>
                        </div>
                        <!-- Why Choose List Item End -->

                        <!-- Why Choose List Item Start -->
                        <div class="why-choose-list-item wow fadeInUp" data-wow-delay="0.2s">
                            <h3>proven results</h3>
                            <p>We create customized social media strategies that align with your brand's unique goals and values.</p>
                        </div>
                        <!-- Why Choose List Item End -->
                    </div>
                    <!-- Why Choose List End -->
                </div>

                <div class="col-lg-6 order-lg-2 order-3">
                    <div class="why-choose-images">
                        <div class="why-choose-circle">
                            <img src="{{ asset('assets/images/why-choose-circle.png') }}" alt="">
                        </div>
    
                        <div class="why-choose-img">
                            <img src="{{ asset('assets/images/why-choose-img.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 order-lg-2 order-2">
                    <!-- Why Choose List Start -->
                    <div class="why-choose-list">
                        <!-- Why Choose List Item Start -->
                        <div class="why-choose-list-item wow fadeInUp">
                            <h3>Expert team</h3>
                            <p>We create customized social media strategies that align with your brand's unique goals and values.</p>
                        </div>
                        <!-- Why Choose List Item End -->

                        <!-- Why Choose List Item Start -->
                        <div class="why-choose-list-item wow fadeInUp" data-wow-delay="0.2s">
                            <h3>End-to-end solutions</h3>
                            <p>We create customized social media strategies that align with your brand's unique goals and values.</p>
                        </div>
                        <!-- Why Choose List Item End -->
                    </div>
                    <!-- Why Choose List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- What We Do Section Start -->
    <div class="what-we-do">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- Section Tite Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">what we do</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Brands through strategic <span>social media</span> marketing</h2>
                        </div>
                        <!-- Section Tite End -->

                        <!-- What We Body Start -->
                        <div class="what-we-body">
                            <!-- Testimonial Review Image Start -->
                            <div class="what-we-review-image">
                                <div class="satisfy-client-images">
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/satisfy-client-img-1.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/satisfy-client-img-2.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/satisfy-client-img-3.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="satisfy-client-content wow fadeInUp">
                                    <p>Join our 135k+ community of talent our social customer</p>
                                </div>
                            </div>
                            <!-- Testimonial Review Image End -->

                            <!-- What We Button Start -->
                            <div class="what-we-btn wow fadeInUp" data-wow-delay="0.2s">
                                <a href="{{ route('contact') }}" class="btn-default"><span>get started</span></a>
                            </div>
                            <!-- What We Button End -->
                        </div>
                        <!-- What We Body End -->

                        <!-- What We Social Box Start -->
                        <div class="what-we-social-box">
                            <!-- What We Social Image Start -->
                            <div class="what-we-social-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/what-we-social-image.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- What We Social Image End -->

                            <!-- What We Social Content Start -->
                            <div class="what-we-social-content wow fadeInUp" data-wow-delay="0.2s">
                                <p>Empowering Businesses to  Unmatched Growth Through Innovative Social Media Marketing Strategies</p>
                                <div class="what-we-social-tags">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i>Facebook</a>
                                    <a href="#"><i class="fa-brands fa-x-twitter"></i>Twitter</a>
                                </div>
                            </div>
                            <!-- What We Social Content End -->
                        </div>
                        <!-- What We Social Box End -->
                    </div>
                    <!-- What We Do Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- What We Images Start -->
                    <div class="what-we-images">
                        <div class="what-we-img">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/what-we-img.jpg') }}" alt="">
                            </figure>
                        </div>
                        <div class="our-agency-circle">
                            <a href="{{ route('contact') }}"><img src="{{ asset('assets/images/our-agency-circle.png') }}" alt=""></a>
                        </div>
                    </div>
                    <!-- What We Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->

    <!-- Key Facts Section Start -->
    <div class="key-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Key Facts Box Start -->
                    <div class="key-facts-box">
                        <!-- Key Facts Image Start -->
                        <div class="key-facts-image">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/images/key-facts-image.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Key Facts Image End -->

                        <!-- Key Facts Content Start -->
                        <div class="key-facts-content">
                            <!-- Key Facts Header Start -->
                            <div class="key-facts-header">
                                <!-- Section Tite Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">our approach</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Key <span>facts</span> about our success</h2>
                                </div>
                                <!-- Section Tite End -->

                                <!-- Free Consultation Circle Start -->
                                <div class="free-consultation-circle">
                                    <a href="{{ route('contact') }}"><img src="{{ asset('assets/images/free-consultation-circle.png') }}" alt=""></a>
                                </div>
                                <!-- Free Consultation Circle End -->
                            </div>
                            <!-- Key Facts Header End -->

                            <!-- Key Facts Body Start -->
                            <div class="key-facts-body">
                                <!-- Key Facts Counter Start -->
                                <div class="key-facts-couner">
                                    <h2><span class="counter">235</span>+</h2>
                                    <p>With over 530 successful SEO projects completed.</p>
                                </div>
                                <!-- Key Facts Counter End -->

                                <!-- Key Facts Counter Start -->
                                <div class="key-facts-couner">
                                    <h2><span class="counter">25</span>k+</h2>
                                    <p>With over 530 successful SEO projects completed.</p>
                                </div>
                                <!-- Key Facts Counter End -->

                                <!-- Key Facts Counter Start -->
                                <div class="key-facts-couner">
                                    <h2><span class="counter">97</span>%</h2>
                                    <p>With over 530 successful SEO projects completed.</p>
                                </div>
                                <!-- Key Facts Counter End -->

                                <!-- Key Facts Counter Start -->
                                <div class="key-facts-couner">
                                    <h2><span class="counter">1.1</span>k+</h2>
                                    <p>With over 530 successful SEO projects completed.</p>
                                </div>
                                <!-- Key Facts Counter End -->
                            </div>
                            <!-- Key Facts Body End -->
                        </div>
                        <!-- Key Facts Content End -->
                    </div>
                    <!-- Key Facts Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Key Facts Section End -->
    
    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our team</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Meet our experts <span>team</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('team') }}" class="btn-default">all team members</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

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
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- Our Soultion Section Start -->
    <div class="our-soultion">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Soultion Content Start -->
                    <div class="our-soultion-content">
                        <!-- Section Tite Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our soultion</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Innovative solutions for social <span>success</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Discover cutting-edge strategies and tailored solutions designed to amplify  brand's presence, engage your audience, and achieve measurable results.</p>
                        </div>
                        <!-- Section Tite End -->

                        <!-- Our Soultion Box Start -->
                        <div class="our-soultion-box">
                            <!-- Our Soultion Item Start -->
                            <div class="our-soultion-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-facebook.svg') }}" alt="">
                                </div>
                                <div class="soultion-item-content">
                                    <h3><span class="counter">6894</span>+</h3>
                                    <p>Account Boosted</p>
                                </div>
                            </div>
                            <!-- Our Soultion Item End -->

                            <!-- Our Soultion Item Start -->
                            <div class="our-soultion-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-Linkedin.svg') }}" alt="">
                                </div>
                                <div class="soultion-item-content">
                                    <h3><span class="counter">560</span>+</h3>
                                    <p>Account Manage</p>
                                </div>
                            </div>
                            <!-- Our Soultion Item End -->

                            <!-- Our Soultion Item Start -->
                            <div class="our-soultion-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-instagram.svg') }}" alt="">
                                </div>
                                <div class="soultion-item-content">
                                    <h3><span class="counter">2387</span>+</h3>
                                    <p>Account Optimize</p>
                                </div>
                            </div>
                            <!-- Our Soultion Item End -->

                            <!-- Our Soultion Item Start -->
                            <div class="our-soultion-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-tiktok.svg') }}" alt="">
                                </div>
                                <div class="soultion-item-content">
                                    <h3><span class="counter">8632</span>+</h3>
                                    <p>Account Grow</p>
                                </div>
                            </div>
                            <!-- Our Soultion Item End -->

                            <!-- Our Soultion Item Start -->
                            <div class="our-soultion-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-youtube.svg') }}" alt="">
                                </div>
                                <div class="soultion-item-content">
                                    <h3><span class="counter">7159</span>+</h3>
                                    <p>User Hired</p>
                                </div>
                            </div>
                            <!-- Our Soultion Item End -->

                            <!-- Our Soultion Item Start -->
                            <div class="our-soultion-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-twitter.svg') }}" alt="">
                                </div>
                                <div class="soultion-item-content">
                                    <h3><span class="counter">4753</span>+</h3>
                                    <p>Account Promote</p>
                                </div>
                            </div>
                            <!-- Our Soultion Item End -->
                        </div>
                        <!-- Our Soultion Box End -->
                    </div>
                    <!-- Our Soultion Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Soultion Image Box Start -->
                    <div class="soultion-image-box">
                        <!-- Our Soultion Image Start -->
                        <div class="our-soultion-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/our-soultion-image.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Our Soultion Image End -->

                        <!-- Our Client Box Start -->
                        <div class="our-client-box">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-satisficed-client.svg') }}" alt="">
                            </div>

                            <div class="client-box-content">
                                <h3><span class="counter">2500</span>+</h3>
                                <p>Satisficed client</p>
                            </div>
                        </div>
                        <!-- Our Client Box End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Soultion Section End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">What <span>clients</span> are saying</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('contact') }}" class="btn-default">contact us</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">                                   
                                        <div class="testimonial-header">
                                            <div class="testimonial-content">
                                                <p>"Working with this team has a game-changer for our brand engagement skyrocketed, we've seen a noticeable increase in sales."</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-1.jpg') }}" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>arlene mcCoy</h3>
                                                    <p>Co Founder</p>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="testimonial-body">
                                            <div class="testimonial-counter">
                                                <h2><span class="counter">80</span>K</h2>
                                                <p>Instagram Followers</p>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">                                   
                                        <div class="testimonial-header">
                                            <div class="testimonial-content">
                                                <p>"Working with this team has a game-changer for our brand engagement skyrocketed, we've seen a noticeable increase in sales."</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-2.jpg') }}" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>arlene mcCoy</h3>
                                                    <p>Co Founder</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="testimonial-counter">
                                                <h2><span class="counter">130</span>K</h2>
                                                <p>Instagram Followers</p>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">                                   
                                        <div class="testimonial-header">
                                            <div class="testimonial-content">
                                                <p>"Working with this team has a game-changer for our brand engagement skyrocketed, we've seen a noticeable increase in sales."</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-3.jpg') }}" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>arlene mcCoy</h3>
                                                    <p>Co Founder</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="testimonial-counter">
                                                <h2><span class="counter">80</span>M</h2>
                                                <p>Instagram Followers</p>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-content">
                                                <p>"Working with this team has a game-changer for our brand engagement skyrocketed, we've seen a noticeable increase in sales."</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-4.jpg') }}" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>arlene mcCoy</h3>
                                                    <p>Co Founder</p>
                                                </div>
                                            </div>
                                        </div>                               

                                        <div class="testimonial-body">
                                            <div class="testimonial-counter">
                                                <h2><span class="counter">200</span>M+</h2>
                                                <p>Social Followers</p>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->                                
                            </div>
                            <div class="testimonial-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div> 
    <!-- Our Testimonial Section End -->

    <!-- Our FAQs Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Our FAQs Content Start -->
                    <div class="our-faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">faqs</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Answers to your common <span>questions</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Find clear and concise answers to the most frequently asked questions about our social media marketing services.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQs Review Box Start -->
                        <div class="faqs-review-box">
                            <!-- Review Rating Box Start -->
                            <div class="review-rating-box">
                                <h2><span class="counter">4.9</span></h2>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <!-- Review Rating Box End -->
                            
                            <!-- Review Client Box Start -->
                            <div class="review-client-box">
                                <!-- Review Image Start -->
                                <div class="satisfy-client-images">
                                    <div class="satisfy-client-img">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/satisfy-client-img-1.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-img">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/satisfy-client-img-2.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-img">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/satisfy-client-img-3.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Testimonial Review Image End -->

                                <!-- Satisfy Client Box Start -->
                                <div class="satisfy-client-content wow fadeInUp">
                                    <p>Explore our trust score Customer Reviews</p>
                                </div>
                            </div>
                            <!-- Review Client Box End -->
                        </div>
                        <!-- FAQs Review Box End -->
                    </div>
                    <!-- Our FAQs Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="faqaccordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What is Social Media Marketing?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform's unique audience.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Which platforms do you specialize in?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform's unique audience.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    How long before I see results?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform's unique audience.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->    

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Do you offer content creation?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform's unique audience.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                        
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    What industries do you work with?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform's unique audience.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our FAQs Section End -->
@endsection