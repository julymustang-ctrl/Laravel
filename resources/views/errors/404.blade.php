@extends('layouts.app')

@section('title', '404 - Page Not Found')
@section('meta_description', 'The page you are looking for could not be found.')

@section('content')
<!-- 404 Section Start -->
<div class="error-404">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Error 404 Content Start -->
                <div class="error-404-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">404 Error</h3>
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Page <span>Not Found</span></h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Sorry, the page you are looking for could not be found. It might have been moved, deleted, or you entered the wrong URL.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Error 404 Features Start -->
                    <div class="error-404-features">
                        <div class="feature-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="icon-box">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Go Back Home</h4>
                                <p>Return to our homepage to continue browsing</p>
                            </div>
                        </div>

                        <div class="feature-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Search Our Site</h4>
                                <p>Use our search to find what you're looking for</p>
                            </div>
                        </div>

                        <div class="feature-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Contact Support</h4>
                                <p>Get help from our support team</p>
                            </div>
                        </div>
                    </div>
                    <!-- Error 404 Features End -->

                    <!-- Error 404 Button Start -->
                    <div class="error-404-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="{{ route('home') }}" class="btn-default">Back to Homepage</a>
                        <a href="{{ route('contact') }}" class="btn-default btn-outline">Contact Us</a>
                    </div>
                    <!-- Error 404 Button End -->
                </div>
                <!-- Error 404 Content End -->
            </div>

            <div class="col-lg-6">
                <!-- Error 404 Image Start -->
                <div class="error-404-image">
                    <figure class="image-anime">
                        <img src="{{ asset('assets/images/404-image.png') }}" alt="404 Error">
                    </figure>
                    
                    <!-- Floating Elements Start -->
                    <div class="floating-elements">
                        <div class="floating-item floating-1">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="floating-item floating-2">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="floating-item floating-3">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <!-- Floating Elements End -->
                </div>
                <!-- Error 404 Image End -->
            </div>
        </div>
    </div>
</div>
<!-- 404 Section End -->

<!-- Quick Links Section Start -->
<div class="quick-links-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Quick Links</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Popular <span>Pages</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="quick-link-item wow fadeInUp">
                    <div class="icon-box">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <h4><a href="{{ route('about') }}">About Us</a></h4>
                    <p>Learn more about our company and mission</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="quick-link-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h4><a href="{{ route('services') }}">Our Services</a></h4>
                    <p>Explore our social media marketing services</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="quick-link-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <i class="fas fa-folder-open"></i>
                    </div>
                    <h4><a href="{{ route('projects') }}">Portfolio</a></h4>
                    <p>View our latest projects and case studies</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="quick-link-item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="icon-box">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h4><a href="{{ route('contact') }}">Contact</a></h4>
                    <p>Get in touch with our expert team</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick Links Section End -->
@endsection

@push('styles')
<style>
.error-404 {
    padding: 120px 0;
    background: #f8f9fa;
}

.error-404-content .section-title h1 {
    font-size: 72px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #333;
}

.error-404-features {
    margin: 50px 0;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 25px;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.feature-item:hover {
    transform: translateX(10px);
}

.feature-item .icon-box {
    width: 60px;
    height: 60px;
    background: #007bff;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    flex-shrink: 0;
}

.feature-content h4 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 8px;
    color: #333;
}

.feature-content p {
    color: #666;
    margin: 0;
}

.error-404-btn {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.error-404-image {
    position: relative;
    text-align: center;
}

.floating-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.floating-item {
    position: absolute;
    width: 60px;
    height: 60px;
    background: rgba(0,123,255,0.1);
    border: 2px solid #007bff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #007bff;
    font-size: 24px;
    animation: float 3s ease-in-out infinite;
}

.floating-1 {
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.floating-2 {
    top: 50%;
    right: 15%;
    animation-delay: 1s;
}

.floating-3 {
    bottom: 25%;
    left: 20%;
    animation-delay: 2s;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

.quick-links-section {
    padding: 80px 0;
    background: #fff;
}

.quick-link-item {
    text-align: center;
    padding: 40px 30px;
    background: #f8f9fa;
    border-radius: 12px;
    margin-bottom: 30px;
    transition: all 0.3s ease;
}

.quick-link-item:hover {
    background: #fff;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transform: translateY(-10px);
}

.quick-link-item .icon-box {
    width: 80px;
    height: 80px;
    background: #007bff;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    margin: 0 auto 25px;
    transition: all 0.3s ease;
}

.quick-link-item:hover .icon-box {
    background: #0056b3;
    transform: scale(1.1);
}

.quick-link-item h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
}

.quick-link-item h4 a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.quick-link-item:hover h4 a {
    color: #007bff;
}

.quick-link-item p {
    color: #666;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .error-404-content .section-title h1 {
        font-size: 48px;
    }
    
    .error-404-btn {
        flex-direction: column;
        align-items: center;
    }
    
    .feature-item {
        flex-direction: column;
        text-align: center;
    }
}
</style>
@endpush