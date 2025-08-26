@extends('layouts.app')

@section('title', 'Our Services - Social Media Marketing Agency')
@section('meta_description', 'Discover our comprehensive social media marketing services including strategy development, content creation, and analytics.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Services</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Comprehensive social media <span>solutions</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We offer a full range of social media marketing services designed to help your brand succeed in the digital landscape.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="{{ 0.25 * $loop->index }}s">
                        <!-- Service Icon Start -->
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/' . $service['icon']) }}" alt="{{ $service['title'] }}">
                        </div>
                        <!-- Service Icon End -->

                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3><a href="{{ route('services.single', $service['id']) }}">{{ $service['title'] }}</a></h3>
                            <p>{{ $service['description'] }}</p>
                            
                            <!-- Service Features Start -->
                            <ul class="service-features">
                                @foreach($service['features'] as $feature)
                                <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                            <!-- Service Features End -->

                            <!-- Service Button Start -->
                            <div class="service-btn">
                                <a href="{{ route('services.single', $service['id']) }}" class="btn-default">learn more</a>
                            </div>
                            <!-- Service Button End -->
                        </div>
                        <!-- Service Content End -->
                    </div>
                    <!-- Service Item End -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Service Process Section Start -->
    <div class="service-process">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our process</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">How we <span>work</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <!-- Process Step Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="process-step wow fadeInUp">
                        <div class="process-number">01</div>
                        <div class="process-content">
                            <h3>Discovery & Research</h3>
                            <p>We start by understanding your business, goals, target audience, and competitors to create a solid foundation.</p>
                        </div>
                    </div>
                </div>
                <!-- Process Step End -->

                <!-- Process Step Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="process-step wow fadeInUp" data-wow-delay="0.25s">
                        <div class="process-number">02</div>
                        <div class="process-content">
                            <h3>Strategy Development</h3>
                            <p>Based on our research, we develop a comprehensive social media strategy tailored to your specific needs.</p>
                        </div>
                    </div>
                </div>
                <!-- Process Step End -->

                <!-- Process Step Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="process-step wow fadeInUp" data-wow-delay="0.5s">
                        <div class="process-number">03</div>
                        <div class="process-content">
                            <h3>Implementation & Optimization</h3>
                            <p>We implement the strategy and continuously monitor and optimize for better results and ROI.</p>
                        </div>
                    </div>
                </div>
                <!-- Process Step End -->
            </div>
        </div>
    </div>
    <!-- Service Process Section End -->

    <!-- CTA Section Start -->
    <div class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Ready to get <span>started?</span></h2>
                        <p class="wow fadeInUp">Let's discuss how we can help your brand succeed with our social media marketing services.</p>
                        <div class="cta-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="{{ route('contact') }}" class="btn-default">get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->
@endsection