@extends('layouts.app')

@section('title', 'Client Testimonials - What Our Clients Say')
@section('meta_description', 'Read what our satisfied clients have to say about our social media marketing services.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Client <span>Testimonials</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Testimonials Section Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">client reviews</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">What our clients <span>say</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Don't just take our word for it. Here's what our satisfied clients have to say about our services.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach($testimonials as $testimonial)
                <div class="col-lg-6 col-md-12">
                    <!-- Testimonial Item Start -->
                    <div class="testimonial-item wow fadeInUp" data-wow-delay="{{ 0.25 * ($loop->index % 2) }}s">
                        <!-- Testimonial Header Start -->
                        <div class="testimonial-header">
                            <div class="testimonial-image">
                                <figure>
                                    <img src="{{ asset('assets/images/' . $testimonial['image']) }}" alt="{{ $testimonial['name'] }}">
                                </figure>
                            </div>
                            <div class="testimonial-info">
                                <h4>{{ $testimonial['name'] }}</h4>
                                <p>{{ $testimonial['position'] }} at {{ $testimonial['company'] }}</p>
                                <div class="testimonial-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $testimonial['rating'])
                                            <i class="fa-solid fa-star"></i>
                                        @else
                                            <i class="fa-regular fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Header End -->

                        <!-- Testimonial Content Start -->
                        <div class="testimonial-content">
                            <div class="testimonial-quote">
                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="Quote">
                            </div>
                            <p>"{{ $testimonial['testimonial'] }}"</p>
                        </div>
                        <!-- Testimonial Content End -->
                    </div>
                    <!-- Testimonial Item End -->
                </div>
                @endforeach

                <!-- Additional Static Testimonials -->
                <div class="col-lg-6 col-md-12">
                    <div class="testimonial-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="testimonial-header">
                            <div class="testimonial-image">
                                <figure>
                                    <img src="{{ asset('assets/images/team-3.jpg') }}" alt="Jessica Parker">
                                </figure>
                            </div>
                            <div class="testimonial-info">
                                <h4>Jessica Parker</h4>
                                <p>Brand Manager at Creative Studios</p>
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-quote">
                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="Quote">
                            </div>
                            <p>"The team's expertise in social media strategy helped us build a strong online community. Our follower engagement has never been higher!"</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="testimonial-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="testimonial-header">
                            <div class="testimonial-image">
                                <figure>
                                    <img src="{{ asset('assets/images/team-4.jpg') }}" alt="Robert Chen">
                                </figure>
                            </div>
                            <div class="testimonial-info">
                                <h4>Robert Chen</h4>
                                <p>Founder at E-commerce Plus</p>
                                <div class="testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-quote">
                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="Quote">
                            </div>
                            <p>"Professional, creative, and results-driven. They transformed our social media presence and significantly boosted our online sales."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials Section End -->

    <!-- Client Logos Section Start -->
    <div class="client-logos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">trusted by</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Amazing <span>clients</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="client-logos-grid">
                        <div class="client-logo-item wow fadeInUp">
                            <img src="{{ asset('assets/images/client-logo-1.svg') }}" alt="Client Logo">
                        </div>
                        <div class="client-logo-item wow fadeInUp" data-wow-delay="0.1s">
                            <img src="{{ asset('assets/images/client-logo-2.svg') }}" alt="Client Logo">
                        </div>
                        <div class="client-logo-item wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/images/client-logo-3.svg') }}" alt="Client Logo">
                        </div>
                        <div class="client-logo-item wow fadeInUp" data-wow-delay="0.3s">
                            <img src="{{ asset('assets/images/client-logo-4.svg') }}" alt="Client Logo">
                        </div>
                        <div class="client-logo-item wow fadeInUp" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/images/client-logo-5.svg') }}" alt="Client Logo">
                        </div>
                        <div class="client-logo-item wow fadeInUp" data-wow-delay="0.5s">
                            <img src="{{ asset('assets/images/client-logo-6.svg') }}" alt="Client Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Logos Section End -->

    <!-- Stats Section Start -->
    <div class="testimonial-stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp">
                        <div class="stat-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <h2><span class="counter">2500</span>+</h2>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="stat-icon">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="stat-content">
                            <h2><span class="counter">4.9</span>/5</h2>
                            <p>Average Rating</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="stat-icon">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <div class="stat-content">
                            <h2><span class="counter">150</span>+</h2>
                            <p>Awards Won</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="stat-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="stat-content">
                            <h2><span class="counter">300</span>%</h2>
                            <p>Average Growth</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Stats Section End -->

    <!-- Video Testimonial Section Start -->
    <div class="video-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">video testimonial</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Hear from our <span>clients</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="video-testimonial-box">
                        <div class="video-thumbnail">
                            <img src="{{ asset('assets/images/testimonial-video-thumb.jpg') }}" alt="Video Testimonial">
                            <div class="play-button">
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-popup">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="video-testimonial-content">
                            <h4>"Working with this team was a game-changer for our business"</h4>
                            <p>- Sarah Johnson, CEO of TechStart Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Testimonial Section End -->

    <!-- CTA Section Start -->
    <div class="testimonial-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Ready to join our <span>success stories?</span></h2>
                        <p class="wow fadeInUp">Let us help you achieve the same amazing results as our satisfied clients.</p>
                        <div class="cta-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="{{ route('contact') }}" class="btn-default">Start Your Success Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->
@endsection