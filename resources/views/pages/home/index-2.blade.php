@extends('layouts.app')

@section('title', 'Artistic - Social Media Marketing Agency')
@section('meta_description', 'Transform your brand with powerful social media strategies. Professional social media marketing agency specializing in creative content and engagement.')

@section('content')
<!-- Hero Section Start -->
<div class="hero hero-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Transform Your Brand with <span>Creative Social Strategies</span></h1>
                        <p class="wow fadeInUp">Unlock your brand's potential with our innovative social media marketing solutions. We create compelling content that drives engagement and delivers measurable results.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Features Start -->
                    <div class="hero-features wow fadeInUp" data-wow-delay="0.2s">
                        <div class="hero-feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Data-Driven Results</h4>
                                <p>Strategic approach backed by analytics</p>
                            </div>
                        </div>

                        <div class="hero-feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Expert Team</h4>
                                <p>Professional social media specialists</p>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Features End -->

                    <!-- Hero Button Start -->
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="{{ route('services') }}" class="btn-default">Explore Services</a>
                        <a href="{{ route('projects') }}" class="btn-default btn-outline">View Portfolio</a>
                    </div>
                    <!-- Hero Button End -->
                </div>
                <!-- Hero Content End -->
            </div>

            <div class="col-lg-6">
                <!-- Hero Images Start -->
                <div class="hero-images hero-images-2">
                    <!-- Hero Main Image Start -->
                    <div class="hero-main-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/hero-image-2.png') }}" alt="Social Media Marketing">
                        </figure>

                        <!-- Hero Stats Box Start -->
                        <div class="hero-stats-box">
                            <div class="stats-item">
                                <h3><span class="counter">95</span>%</h3>
                                <p>Client Satisfaction</p>
                            </div>
                            <div class="stats-item">
                                <h3><span class="counter">250</span>+</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <!-- Hero Stats Box End -->

                        <!-- Hero Achievement Box Start -->
                        <div class="hero-achievement-box">
                            <div class="achievement-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="achievement-content">
                                <h4>Award Winning Agency</h4>
                                <p>Recognized for excellence in social media marketing</p>
                            </div>
                        </div>
                        <!-- Hero Achievement Box End -->
                    </div>
                    <!-- Hero Main Image End -->
                </div>
                <!-- Hero Images End -->
            </div>
        </div>
    </div>

    <!-- Hero Background Elements Start -->
    <div class="hero-bg-elements">
        <div class="bg-element bg-element-1"></div>
        <div class="bg-element bg-element-2"></div>
        <div class="bg-element bg-element-3"></div>
    </div>
    <!-- Hero Background Elements End -->
</div>
<!-- Hero Section End -->

<!-- Services Preview Section Start -->
<div class="services-preview">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Our Expertise</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">What We <span>Specialize</span> In</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-preview-item wow fadeInUp">
                    <div class="service-icon">
                        <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="">
                    </div>
                    <h4>Strategy Development</h4>
                    <p>Comprehensive social media strategies tailored to your business goals and target audience.</p>
                    <a href="{{ route('services.single', 1) }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-preview-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-icon">
                        <img src="{{ asset('assets/images/icon-service-2.svg') }}" alt="">
                    </div>
                    <h4>Content Creation</h4>
                    <p>Engaging and creative content that resonates with your audience across all platforms.</p>
                    <a href="{{ route('services.single', 2) }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-preview-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-icon">
                        <img src="{{ asset('assets/images/icon-service-3.svg') }}" alt="">
                    </div>
                    <h4>Analytics & Reporting</h4>
                    <p>Detailed insights and performance tracking to measure success and optimize campaigns.</p>
                    <a href="{{ route('services.single', 3) }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Preview Section End -->

<!-- About Preview Section Start -->
<div class="about-preview">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-preview-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About Our Agency</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Driving <span>Growth</span> Through Social Media</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We are a passionate team of social media experts dedicated to helping businesses thrive in the digital landscape. Our innovative strategies and creative content drive real results.</p>
                    </div>

                    <div class="about-preview-features wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>5+ Years of Experience</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>250+ Successful Projects</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Expert Team of Professionals</span>
                        </div>
                    </div>

                    <div class="about-preview-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="{{ route('about') }}" class="btn-default">Learn More About Us</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-preview-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('assets/images/about-preview-image.jpg') }}" alt="About Us">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Preview Section End -->

<!-- CTA Section Start -->
<div class="cta-section cta-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content text-center">
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Ready to <span>Transform</span> Your Social Presence?</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Let's create a social media strategy that drives engagement, builds community, and delivers measurable results for your business.</p>
                    <div class="cta-buttons wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ route('contact') }}" class="btn-default">Get Started Today</a>
                        <a href="{{ route('pricing') }}" class="btn-default btn-outline">View Pricing</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Background Elements Start -->
    <div class="cta-bg-elements">
        <div class="bg-shape bg-shape-1"></div>
        <div class="bg-shape bg-shape-2"></div>
    </div>
    <!-- CTA Background Elements End -->
</div>
<!-- CTA Section End -->
@endsection

@push('styles')
<style>
.hero-2 {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    position: relative;
    overflow: hidden;
    padding: 120px 0;
}

.hero-2 .section-title h1 {
    color: #fff;
    font-size: 56px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 25px;
}

.hero-2 .section-title p {
    color: rgba(255,255,255,0.9);
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 40px;
}

.hero-features {
    margin-bottom: 40px;
}

.hero-feature-item {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
    padding: 20px;
    background: rgba(255,255,255,0.1);
    border-radius: 8px;
    backdrop-filter: blur(10px);
}

.feature-icon {
    width: 50px;
    height: 50px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 20px;
}

.feature-content h4 {
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
}

.feature-content p {
    color: rgba(255,255,255,0.8);
    font-size: 14px;
    margin: 0;
}

.hero-btn {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.hero-images-2 {
    position: relative;
}

.hero-stats-box {
    position: absolute;
    top: 20px;
    left: -30px;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    animation: float 3s ease-in-out infinite;
}

.hero-stats-box .stats-item {
    text-align: center;
    margin-bottom: 15px;
}

.hero-stats-box .stats-item:last-child {
    margin-bottom: 0;
}

.hero-stats-box h3 {
    font-size: 28px;
    font-weight: 700;
    color: #333;
    margin-bottom: 5px;
}

.hero-stats-box p {
    color: #666;
    font-size: 14px;
    margin: 0;
}

.hero-achievement-box {
    position: absolute;
    bottom: 30px;
    right: -20px;
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 15px;
    max-width: 280px;
    animation: float 3s ease-in-out infinite;
    animation-delay: 1.5s;
}

.achievement-icon {
    width: 50px;
    height: 50px;
    background: #ffd700;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
    font-size: 20px;
    flex-shrink: 0;
}

.achievement-content h4 {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
}

.achievement-content p {
    color: #666;
    font-size: 14px;
    margin: 0;
}

.hero-bg-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    z-index: 0;
}

.bg-element {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    animation: float 6s ease-in-out infinite;
}

.bg-element-1 {
    width: 200px;
    height: 200px;
    top: 10%;
    right: 10%;
    animation-delay: 0s;
}

.bg-element-2 {
    width: 150px;
    height: 150px;
    bottom: 20%;
    left: 5%;
    animation-delay: 2s;
}

.bg-element-3 {
    width: 100px;
    height: 100px;
    top: 60%;
    right: 20%;
    animation-delay: 4s;
}

.services-preview {
    padding: 80px 0;
    background: #f8f9fa;
}

.service-preview-item {
    text-align: center;
    padding: 40px 30px;
    background: #fff;
    border-radius: 12px;
    margin-bottom: 30px;
    transition: all 0.3s ease;
    height: 100%;
}

.service-preview-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}

.service-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f8f9fa;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.service-preview-item:hover .service-icon {
    background: #007bff;
    transform: scale(1.1);
}

.service-preview-item h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #333;
}

.service-preview-item p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 25px;
}

.service-link {
    color: #007bff;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.service-link:hover {
    color: #0056b3;
    gap: 12px;
}

.about-preview {
    padding: 80px 0;
    background: #fff;
}

.about-preview-features {
    margin: 30px 0;
}

.about-preview-features .feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
    color: #333;
}

.about-preview-features .feature-item i {
    color: #28a745;
    font-size: 16px;
}

.cta-2 {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    padding: 100px 0;
    position: relative;
    overflow: hidden;
}

.cta-2 .cta-content h2 {
    color: #fff;
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
}

.cta-2 .cta-content p {
    color: rgba(255,255,255,0.9);
    font-size: 18px;
    margin-bottom: 40px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-bg-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
}

.bg-shape {
    position: absolute;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    animation: float 8s ease-in-out infinite;
}

.bg-shape-1 {
    width: 300px;
    height: 300px;
    top: -150px;
    right: -150px;
    animation-delay: 0s;
}

.bg-shape-2 {
    width: 200px;
    height: 200px;
    bottom: -100px;
    left: -100px;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

@media (max-width: 768px) {
    .hero-2 .section-title h1 {
        font-size: 36px;
    }
    
    .hero-stats-box,
    .hero-achievement-box {
        position: static;
        margin: 20px 0;
        max-width: 100%;
    }
    
    .cta-2 .cta-content h2 {
        font-size: 32px;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
}
</style>
@endpush