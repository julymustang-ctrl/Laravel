@extends('layouts.app')

@section('title', 'Artistic - Social Media Marketing Agency')
@section('meta_description', 'Grow your brand with powerful social media strategies. Professional social media marketing agency.')

@section('content')
    <!-- Hero Section Start-->
    <div class="hero">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <video autoplay muted loop id="myVideo">
                <source src="https://demo.awaikenthemes.com/assets/videos/artistic-social-media-video.mp4" type="video/mp4">
            </video>
            <!-- Selfhosted Video End -->
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Grow Your Brand with Powerful <span>Social Media Strategies</span></h1>
                            <p class="wow fadeInUp">Elevate your online presence, engage your audience, and drive meaningful results with tailored social media strategies.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="{{ route('contact') }}" class="btn-default">get started</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Hero Images Start -->
                    <div class="hero-images">
                        <!-- Hero Image Start -->
                        <div class="hero-image">
                            <figure>
                                <img src="{{ asset('assets/images/hero-image.png') }}" alt="">
                            </figure>

                            <!-- Hero Image Icon Box Start -->
                            <div class="hero-img-icon-box">
                                <div class="icon-hero-img-1">
                                    <figure>
                                        <img src="{{ asset('assets/images/icon-hero-img-1.svg') }}" alt="">
                                    </figure>
                                </div>

                                <div class="icon-hero-img-2">
                                    <figure>
                                        <img src="{{ asset('assets/images/icon-hero-img-2.svg') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- Hero Image Icon Box End -->
                        </div>
                        <!-- Hero Image End -->

                        <!-- Satisficed Client Box Start -->
                        <div class="satisficed-client-box">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-satisficed-client.svg') }}" alt="">
                            </div>
                            <div class="satisficed-client-content">
                                <h3><span class="counter">2500</span>+</h3>
                                <p>satisfied clients</p>
                            </div>
                        </div>
                        <!-- Satisficed Client Box End -->
                    </div>
                </div>
                <!-- Hero Images End -->
            </div>
        </div>
    </div>
    <!-- Hero Section End-->

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
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
        <!-- Scrolling Ticker End -->
    </div>
    <!-- Scrolling Ticker Section End -->

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
                            <div class="about-us-list">
                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-about-list-item-1.svg') }}" alt="">
                                    </div>
                                    <div class="about-list-content">
                                        <h3>tailored marketing solutions</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->

                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-about-list-item-2.svg') }}" alt="">
                                    </div>
                                    <div class="about-list-content">
                                        <h3>proactive trends tracking</h3>
                                    </div>
                                </div>
                                <!-- About List Item End -->

                                <!-- About List Item Start -->
                                <div class="about-list-item wow fadeInUp" data-wow-delay="0.4s">
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

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our social media <span>services</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="{{ route('services') }}" class="btn-default">see all services</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <!-- Our Service Image Start -->
                    <div class="our-service-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/services-image.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Our Service Image End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Boxes Start -->
                    <div class="service-boxes">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="">
                            </div>
                            <div class="service-item-content">
                                <h3>social media strategy development</h3>
                                <p>We create tailored social media strategies that align with your brand goals.</p>
                                <a href="{{ route('services.single', 1) }}" class="readmore-btn">read more</a>
                            </div>
                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-service-2.svg') }}" alt="">
                            </div>
                            <div class="service-item-content">
                                <h3>Social media account management</h3>
                                <p>We create tailored social media strategies that align with your brand goals.</p>
                                <a href="{{ route('services.single', 2) }}" class="readmore-btn">read more</a>
                            </div>
                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-service-3.svg') }}" alt="">
                            </div>
                            <div class="service-item-content">
                                <h3>Social media analytics and reporting</h3>
                                <p>We create tailored social media strategies that align with your brand goals.</p>
                                <a href="{{ route('services.single', 3) }}" class="readmore-btn">read more</a>
                            </div>
                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-service-4.svg') }}" alt="">
                            </div>
                            <div class="service-item-content">
                                <h3>Hashtag research and optimization</h3>
                                <p>We create tailored social media strategies that align with your brand goals.</p>
                                <a href="{{ route('services.single', 4) }}" class="readmore-btn">read more</a>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                    <!-- Service Boxes End -->
                </div>

                <div class="col-lg-12">
                    <!-- Service Footer Start -->
                    <div class="service-footer wow fadeInUp" data-wow-delay="0.8s">
                        <p><span>Free</span> Let's make something great work together.<a href="{{ route('contact') }}">Get Free Quote</a></p>
                    </div>
                    <!-- Service Footer End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Our Brands Section Start -->
    <div class="our-brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Brands Box Start -->
                    <div class="our-brands-box">
                        <!-- Our Brands Content Start -->
                        <div class="our-brand-contant">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">What We do</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Elevate your <span>brand</span></h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Section Button Start -->
                            <div class="our-brand-btn wow fadeInUp" data-wow-delay="0.2s">
                                <a href="{{ route('contact') }}" class="btn-default">contact us</a>
                            </div>
                            <!-- Section Button End -->
                        </div>
                        <!-- Our Brands Content End -->

                        <!-- Our Brand List Start -->
                        <div class="our-brand-list">
                            <!-- Brand List Item Start -->
                            <div class="brand-list-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-brand-item-1.svg') }}" alt="">
                                </div>
                                <div class="brand-item-content">
                                    <h3>Social advertising</h3>
                                    <p>We create tailored social media strategies that align with your brand goals.</p>
                                </div>
                            </div>
                            <!-- Brand List Item End -->

                            <!-- Brand List Item Start -->
                            <div class="brand-list-item active wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-brand-item-2.svg') }}" alt="">
                                </div>
                                <div class="brand-item-content">
                                    <h3>Reel creation</h3>
                                    <p>We create tailored social media strategies that align with your brand goals.</p>
                                </div>
                            </div>
                            <!-- Brand List Item End -->

                            <!-- Brand List Item Start -->
                            <div class="brand-list-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-brand-item-3.svg') }}" alt="">
                                </div>
                                <div class="brand-item-content">
                                    <h3>Content strategies</h3>
                                    <p>We create tailored social media strategies that align with your brand goals.</p>
                                </div>
                            </div>
                            <!-- Brand List Item End -->
                        </div>
                        <!-- Our Brand List End -->
                    </div>
                    <!-- Our Brands Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Brands Section End -->

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
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
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
                        <div class="why-choose-list-item wow fadeInUp" data-wow-delay="0.25s">
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
                        <div class="why-choose-list-item wow fadeInUp" data-wow-delay="0.25s">
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

    <!-- Our Feature Section Start -->
    <div class="our-feature">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Feature Content Start -->
                    <div class="our-feature-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">What We do</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Powerful <span>features</span> for social growth</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our powerful features are designed to drive social growth by expanding reach, boosting brand awareness. From targeted content strategies to analytics, we provide the tools you need to succeed in the dynamic social media landscape.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Feature Body Start -->
                        <div class="our-feature-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Our Feature Body Item Start -->
                            <div class="our-feature-body-item">
                                <img src="{{ asset('assets/images/icon-feature-body.svg') }}" alt="">
                                <h3>Keyword research excellence</h3>
                            </div>
                            <!-- Our Feature Body Item End -->

                            <!-- Our Feature Body Content Start -->
                            <div class="our-feature-body-content">
                                <p>Our powerful features are designed to drive social growth by.</p>
                            </div>
                            <!-- Our Feature Body Content End -->
                        </div>
                        <!-- Our Feature Body End -->

                        <!-- Our Feature Button Start -->
                        <div class="our-feature-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="{{ route('contact') }}" class="btn-default">Discover more</a>
                        </div>
                        <!-- Our Feature Button End -->
                    </div>
                    <!-- Our Feature Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Feature Images Start -->
                    <div class="our-feature-images">
                        <!-- Our Feature Image Start -->
                        <div class="our-feature-img-1 our-feature-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/feature-img-1.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Our Feature Image End -->

                        <!-- Our Feature Img 2 Start -->
                        <div class="our-feature-img-2">
                            <!-- Our Feature Image Start -->
                            <div class="our-feature-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/feature-img-2.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Our Feature Image End -->

                            <!-- Our Feature Image Start -->
                            <div class="our-feature-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/feature-img-3.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Our Feature Image End -->
                        </div>
                        <!-- Our Feature Img 2 End -->

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
                    <!-- Our Feature Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Feature Section End -->

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
                                    <h3 class="wow fadeInUp">key facts</h3>
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

    <!-- Our Pricing Section Start -->
    <div class="our-pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Our Feature Content Start -->
                    <div class="our-feature-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Pricing plan</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Affordable <span>plans</span> for every business</h2>
                        </div>
                        <!-- Section Title End -->
    
                        <!-- Pricing Body list Start -->
                        <div class="pricing-body-list">
                            <!-- Pricing Body list Item Start -->
                            <div class="pricing-body-list-item wow fadeInUp" data-wow-delay="0.2s">
                                <h3>Customizable packages</h3>
                                <p>Our customizable packages are designed to meet your unique  marketing needs. Whether you're a startup.</p>
                            </div>
                            <!-- Pricing Body list Item End -->
    
                            <!-- Pricing Body list Item Start -->
                            <div class="pricing-body-list-item wow fadeInUp" data-wow-delay="0.4s">
                                <h3>Flexible subscription options</h3>
                                <p>Our customizable packages are designed to meet your unique  marketing needs. Whether you're a startup.</p>
                            </div>
                            <!-- Pricing Body list Item End -->
                        </div>
                        <!-- Pricing Body list End -->
                    </div>
                    <!-- Our Feature Content End -->
                </div>

                <div class="col-lg-7">
                    <!-- Pricing Box Start -->
                    <div class="pricing-box">
                        <!-- Pricing Box Start -->
                        <div class="pricing-item wow fadeInUp">
                            <!-- Pricing Header Start -->
                            <div class="pricing-header">
                                <img src="{{ asset('assets/images/icon-pricing-1.svg') }}" alt="">
                                <h3>simple plan</h3>
                                <p>Start at $29 included 3 client</p>
                                <h2><sup>$</sup>29<sub>/per month</sub></h2>
                            </div>
                            <!-- Pricing Header End -->

                            <!-- Pricing Box Body Start -->
                            <div class="pricing-body">
                                <a href="{{ route('contact') }}" class="btn-default btn-highlighted">Get started</a>
                            </div>
                            <!-- Pricing Box Body End -->

                            <!-- Pricing Button Start -->
                            <div class="pricing-footer">
                                <ul>
                                    <li>24/7 customer support</li>
                                    <li>Multi-platform integration</li>
                                    <li>Free initial consultation</li>
                                </ul>
                            </div>
                            <!-- Pricing Button End -->
                        </div>
                        <!-- Pricing Box End -->

                        <!-- Pricing Box Start -->
                        <div class="pricing-item highlighted-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Pricing Header Start -->
                            <div class="pricing-header">
                                <img src="{{ asset('assets/images/icon-pricing-2.svg') }}" alt="">
                                <h3>Standard Plan</h3>
                                <p>Start at $39 included 3 client</p>
                                <h2><sup>$</sup>39<sub>/per month</sub></h2>
                            </div>
                            <!-- Pricing Header End -->

                            <!-- Pricing Box Body Start -->
                            <div class="pricing-body">
                                <a href="{{ route('contact') }}" class="btn-default btn-highlighted">Get started</a>
                            </div>
                            <!-- Pricing Box Body End -->

                            <!-- Pricing Button Start -->
                            <div class="pricing-footer">
                                <ul>
                                    <li>24/7 customer support</li>
                                    <li>Multi-platform integration</li>
                                    <li>Free initial consultation</li>
                                </ul>
                            </div>
                            <!-- Pricing Button End -->
                        </div>
                        <!-- Pricing Box End -->
                    </div>
                    <!-- Pricing Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Pricing Section End -->

    <!-- How It Work Section Start -->
    <div class="how-it-works">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- How It Work Content Start -->
                    <div class="how-it-work-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">How it work</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Step-by-Step guide to social <span>success</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Our step-by-step guide to social success outlines a clear process to elevate your brand. From strategy creation and content development to campaign execution and performance tracking.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Agency Circle Start -->
                        <div class="our-agency-circle">
                            <a href="{{ route('contact') }}">
                                <figure>
                                    <img src="{{ asset('assets/images/our-agency-circle.svg') }}" alt="">
                                </figure>
                                <div class="agency-circle-arrow">
                                    <img src="{{ asset('assets/images/our-agency-arrow.svg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <!-- Our Agency Circle End -->
                    </div>
                    <!-- How It Work Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- How It Work List Start -->
                    <div class="how-it-work-list">
                        <!-- How Work List Item Start -->
                        <div class="how-work-list-item wow fadeInUp">
                            <div class="how-work-list-image">
                                <img src="{{ asset('assets/images/how-work-list-bg.jpg') }}" alt="">
                            </div>

                            <div class="how-work-list-content">
                                <h3>Understand your goals</h3>
                                <p>Our expert develop customized social media plan designed to achieve your business goals.</p>
                            </div>
                            <div class="how-work-list-no">
                                <h2>01</h2>
                            </div>
                        </div>
                        <!-- How Work List Item End -->

                        <!-- How Work List Item Start -->
                        <div class="how-work-list-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="how-work-list-image">
                                <img src="{{ asset('assets/images/how-work-list-bg.jpg') }}" alt="">
                            </div>

                            <div class="how-work-list-content">
                                <h3>Create a strategy</h3>
                                <p>Our expert develop customized social media plan designed to achieve your business goals.</p>
                            </div>
                            <div class="how-work-list-no">
                                <h2>02</h2>
                            </div>
                        </div>
                        <!-- How Work List Item End -->

                        <!-- How Work List Item Start -->
                        <div class="how-work-list-item active wow fadeInUp" data-wow-delay="0.4s">
                            <div class="how-work-list-image">
                                <img src="{{ asset('assets/images/how-work-list-bg.jpg') }}" alt="">
                            </div>

                            <div class="how-work-list-content">
                                <h3>Content creation</h3>
                                <p>Our expert develop customized social media plan designed to achieve your business goals.</p>
                            </div>
                            <div class="how-work-list-no">
                                <h2>03</h2>
                            </div>
                        </div>
                        <!-- How Work List Item End -->

                        <!-- How Work List Item Start -->
                        <div class="how-work-list-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="how-work-list-image">
                                <img src="{{ asset('assets/images/how-work-list-bg.jpg') }}" alt="">
                            </div>
                            
                            <div class="how-work-list-content">
                                <h3>Campaign launch</h3>
                                <p>Our expert develop customized social media plan designed to achieve your business goals.</p>
                            </div>
                            <div class="how-work-list-no">
                                <h2>04</h2>
                            </div>
                        </div>
                        <!-- How Work List Item End -->
                    </div>
                    <!-- How It Work List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How It Work Section End -->

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
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
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

    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Latest blog</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Insights from our <span>experts</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="{{ route('blog') }}" class="btn-default">see all posts</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.single', 1) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/post-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="blog-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.single', 1) }}">How to Craft Engaging Content for Instagram</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="blog-item-btn">
                                <a href="{{ route('blog.single', 1) }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.single', 2) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/post-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="blog-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.single', 2) }}">Social Media Myths You Need to Ignore</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="blog-item-btn">
                                <a href="{{ route('blog.single', 2) }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.single', 3) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/post-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="blog-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.single', 3) }}">Essential Tools for Social Media Success</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="blog-item-btn">
                                <a href="{{ route('blog.single', 3) }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->
@endsection