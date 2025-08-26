@extends('layouts.app')

@section('title', 'Our Services - Social Media Marketing Agency')
@section('meta_description', 'Discover our comprehensive social media marketing services including strategy development, content creation, and analytics.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>services</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">our services</li>
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

    <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>social media strategy development</h3>
                            <p>We create tailored social media of  strategies that align with your  to brand goals. </p>
                            <a href="{{ route('services.single', 'strategy-development') }}" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-2.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Social media account management</h3>
                            <p>We create tailored social media of  strategies that align with your  to brand goals. </p>
                            <a href="{{ route('services.single', 'account-management') }}" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-3.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Social media analytics and reporting</h3>
                            <p>We create tailored social media of  strategies that align with your  to brand goals. </p>
                            <a href="{{ route('services.single', 'analytics-reporting') }}" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-4.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Hashtag research and optimization</h3>
                            <p>We create tailored social media of  strategies that align with your  to brand goals. </p>
                            <a href="{{ route('services.single', 'hashtag-research') }}" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-5.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Social Media Research Mastery</h3>
                            <p>We create tailored social media of  strategies that align with your  to brand goals. </p>
                            <a href="{{ route('services.single', 'research-mastery') }}" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-6.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Social Media Marketing Solutions</h3>
                            <p>We create tailored social media of  strategies that align with your  to brand goals. </p>
                            <a href="{{ route('services.single', 'marketing-solutions') }}" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services End -->

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
                    <div class="section-btn">
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

                <div class="col-lg-3 col-md-6 order-lg-3 order-2">
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
@endsection