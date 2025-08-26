@extends('layouts.app')

@section('title', 'Client Testimonials - What Our Clients Say')
@section('meta_description', 'Read what our satisfied clients have to say about our social media marketing services.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Testimonial</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">testimonial</li>
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

    <!-- Page Testimonial Start -->
    <div class="page-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Box List Start -->
                    <div class="testimonial-box-list">
                        <!-- Testimonial Box Item Start -->
                        <div class="testimonial-box-item wow fadeInUp">
                            <!-- Client Author Image Start -->
                            <div class="client-author-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/author-1.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Client Author Image End -->

                            <!-- Client Testimonial Content Start -->
                            <div class="client-testimonial-content">
                                <!-- Client Testimonial Rating Start -->
                                <div class="client-testimonial-rating">
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <!-- Client Testimonial Rating End -->

                                <!-- Client Testimonial Info Start -->
                                <div class="client-testimonial-info">
                                    <p>The team transformed our brand's online presence with creativity and precision. The results exceeded our expectations! Their digital marketing strategies helped us reach a broader audience and significantly boosted our sales.</p>
                                </div>
                                <!-- Client Testimonial Info End -->

                                <!-- Client Author Content Start -->
                                <div class="client-author-content">
                                    <!-- Client Author Title Start -->
                                    <div class="client-author-title">
                                        <h3>alexander bennett</h3>
                                        <p>senior brand strategist</p>
                                    </div>
                                    <!-- Client Author Title End -->

                                    <!-- Client Author Logo Start -->
                                    <div class="client-author-logo">
                                        <img src="{{ asset('assets/images/icon-testimonial-logo.svg') }}" alt="">
                                    </div>
                                    <!-- Client Author Logo End -->
                                </div>
                                <!-- Client Author Content End -->
                            </div>
                            <!-- Client Testimonial Content End -->
                        </div>
                        <!-- Testimonial Box Item End -->

                        <!-- Testimonial Box Item Start -->
                        <div class="testimonial-box-item wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Client Author Image Start -->
                            <div class="client-author-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/author-2.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Client Author Image End -->

                            <!-- Client Testimonial Content Start -->
                            <div class="client-testimonial-content">
                                <!-- Client Testimonial Rating Start -->
                                <div class="client-testimonial-rating">
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <!-- Client Testimonial Rating End -->

                                <!-- Client Testimonial Info Start -->
                                <div class="client-testimonial-info">
                                    <p>We approached Isabella Morgan with the goal of completely transforming our brand's digital presence, and they exceeded all expectations. Their team took the time to understand our business.</p>
                                </div>
                                <!-- Client Testimonial Info End -->

                                <!-- Client Author Content Start -->
                                <div class="client-author-content">
                                    <!-- Client Author Title Start -->
                                    <div class="client-author-title">
                                        <h3>isabella morgan</h3>
                                        <p>director of digital marketing</p>
                                    </div>
                                    <!-- Client Author Title End -->

                                    <!-- Client Author Logo Start -->
                                    <div class="client-author-logo">
                                        <img src="{{ asset('assets/images/icon-testimonial-logo.svg') }}" alt="">
                                    </div>
                                    <!-- Client Author Logo End -->
                                </div>
                                <!-- Client Author Content End -->
                            </div>
                            <!-- Client Testimonial Content End -->
                        </div>
                        <!-- Testimonial Box Item End -->

                        <!-- Testimonial Box Item Start -->
                        <div class="testimonial-box-item wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Client Author Image Start -->
                            <div class="client-author-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/author-3.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Client Author Image End -->

                            <!-- Client Testimonial Content Start -->
                            <div class="client-testimonial-content">
                                <!-- Client Testimonial Rating Start -->
                                <div class="client-testimonial-rating">
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <!-- Client Testimonial Rating End -->

                                <!-- Client Testimonial Info Start -->
                                <div class="client-testimonial-info">
                                    <p>Collaborating with Christopher Hughes was an absolute pleasure. Their team brought fresh ideas to the table and helped us completely reimagine our online branding and user experience.</p>
                                </div>
                                <!-- Client Testimonial Info End -->

                                <!-- Client Author Content Start -->
                                <div class="client-author-content">
                                    <!-- Client Author Title Start -->
                                    <div class="client-author-title">
                                        <h3>christopher hughes</h3>
                                        <p>chief technology officer</p>
                                    </div>
                                    <!-- Client Author Title End -->

                                    <!-- Client Author Logo Start -->
                                    <div class="client-author-logo">
                                        <img src="{{ asset('assets/images/icon-testimonial-logo.svg') }}" alt="">
                                    </div>
                                    <!-- Client Author Logo End -->
                                </div>
                                <!-- Client Author Content End -->
                            </div>
                            <!-- Client Testimonial Content End -->
                        </div>
                        <!-- Testimonial Box Item End -->

                        <!-- Testimonial Box Item Start -->
                        <div class="testimonial-box-item wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Client Author Image Start -->
                            <div class="client-author-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/author-4.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Client Author Image End -->

                            <!-- Client Testimonial Content Start -->
                            <div class="client-testimonial-content">
                                <!-- Client Testimonial Rating Start -->
                                <div class="client-testimonial-rating">
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <!-- Client Testimonial Rating End -->

                                <!-- Client Testimonial Info Start -->
                                <div class="client-testimonial-info">
                                    <p>When we first partnered with Olivia Reynolds, we were in need of a complete website overhaul. They not only delivered a beautiful, responsive website, but they also implemented a robust digital marketing strategy.</p>
                                </div>
                                <!-- Client Testimonial Info End -->

                                <!-- Client Author Content Start -->
                                <div class="client-author-content">
                                    <!-- Client Author Title Start -->
                                    <div class="client-author-title">
                                        <h3>olivia reynolds</h3>
                                        <p>senior marketing manager</p>
                                    </div>
                                    <!-- Client Author Title End -->

                                    <!-- Client Author Logo Start -->
                                    <div class="client-author-logo">
                                        <img src="{{ asset('assets/images/icon-testimonial-logo.svg') }}" alt="">
                                    </div>
                                    <!-- Client Author Logo End -->
                                </div>
                                <!-- Client Author Content End -->
                            </div>
                            <!-- Client Testimonial Content End -->
                        </div>
                        <!-- Testimonial Box Item End -->
                    </div>
                    <!-- Testimonial Box List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Testimonial End -->
@endsection