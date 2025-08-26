@extends('layouts.app')

@section('title', 'Home - Social Media Marketing Agency')
@section('meta_description', 'Leading social media marketing agency providing comprehensive digital marketing solutions, content creation, and brand management services.')

@section('content')
<!-- Hero Section Start -->
<section class="hero-section hero-image" style="background-image: url('{{ asset('assets/img/hero/hero-bg-2.jpg') }}');">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-xl-6 col-lg-6">
                <div class="hero-content">
                    <span class="hero-subtitle">Welcome to Our Agency</span>
                    <h1 class="hero-title">We Create Amazing <span>Social Media</span> Experiences</h1>
                    <p class="hero-description">Transform your brand's digital presence with our innovative social media marketing strategies and creative content solutions.</p>
                    
                    <div class="hero-buttons">
                        <a href="{{ route('services') }}" class="main-btn btn-filled">Our Services</a>
                        <a href="{{ route('projects') }}" class="main-btn btn-border">View Portfolio</a>
                    </div>
                    
                    <div class="hero-stats">
                        <div class="stat-item">
                            <h3>250+</h3>
                            <p>Happy Clients</p>
                        </div>
                        <div class="stat-item">
                            <h3>1000+</h3>
                            <p>Projects Done</p>
                        </div>
                        <div class="stat-item">
                            <h3>99%</h3>
                            <p>Success Rate</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-6">
                <div class="hero-images">
                    <div class="hero-main-image">
                        <img src="{{ asset('assets/img/hero/hero-main.png') }}" alt="Social Media Marketing">
                        <div class="floating-card card-1">
                            <div class="card-icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="card-content">
                                <h4>Instagram Growth</h4>
                                <p>+250% Engagement</p>
                            </div>
                        </div>
                        
                        <div class="floating-card card-2">
                            <div class="card-icon">
                                <i class="fab fa-facebook"></i>
                            </div>
                            <div class="card-content">
                                <h4>Facebook Reach</h4>
                                <p>2M+ Users</p>
                            </div>
                        </div>
                        
                        <div class="floating-card card-3">
                            <div class="card-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="card-content">
                                <h4>ROI Increase</h4>
                                <p>+180%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Clients Section Start -->
<section class="clients-section">
    <div class="container">
        <div class="clients-wrapper">
            <h4>Trusted by 250+ Companies Worldwide</h4>
            <div class="clients-slider">
                <div class="client-item">
                    <img src="{{ asset('assets/img/clients/client-1.png') }}" alt="Client">
                </div>
                <div class="client-item">
                    <img src="{{ asset('assets/img/clients/client-2.png') }}" alt="Client">
                </div>
                <div class="client-item">
                    <img src="{{ asset('assets/img/clients/client-3.png') }}" alt="Client">
                </div>
                <div class="client-item">
                    <img src="{{ asset('assets/img/clients/client-4.png') }}" alt="Client">
                </div>
                <div class="client-item">
                    <img src="{{ asset('assets/img/clients/client-5.png') }}" alt="Client">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients Section End -->

@endsection

@push('styles')
<style>
.hero-image {
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    position: relative;
    padding: 120px 0;
}

.hero-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 123, 255, 0.8);
}

.hero-content {
    position: relative;
    z-index: 2;
    color: #fff;
}

.hero-subtitle {
    font-size: 16px;
    font-weight: 600;
    color: rgba(255,255,255,0.9);
    margin-bottom: 15px;
    display: block;
}

.hero-title {
    font-size: 56px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 25px;
}

.hero-title span {
    color: #ffd700;
}

.hero-description {
    font-size: 20px;
    line-height: 1.6;
    margin-bottom: 40px;
    color: rgba(255,255,255,0.9);
}

.hero-buttons {
    display: flex;
    gap: 20px;
    margin-bottom: 50px;
    flex-wrap: wrap;
}

.hero-stats {
    display: flex;
    gap: 40px;
}

.stat-item {
    text-align: center;
}

.stat-item h3 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 8px;
    color: #ffd700;
}

.stat-item p {
    color: rgba(255,255,255,0.9);
    font-weight: 500;
}

.hero-images {
    position: relative;
    z-index: 2;
}

.hero-main-image {
    position: relative;
    text-align: center;
}

.hero-main-image img {
    max-width: 100%;
    height: auto;
}

.floating-card {
    position: absolute;
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 15px;
    animation: floatAnimation 3s ease-in-out infinite;
}

.card-1 {
    top: 20%;
    left: -20px;
    animation-delay: 0s;
}

.card-2 {
    top: 50%;
    right: -30px;
    animation-delay: 1s;
}

.card-3 {
    bottom: 20%;
    left: -10px;
    animation-delay: 2s;
}

.card-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.card-1 .card-icon {
    background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
    color: #fff;
}

.card-2 .card-icon {
    background: #1877f2;
    color: #fff;
}

.card-3 .card-icon {
    background: #28a745;
    color: #fff;
}

.card-content h4 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #333;
}

.card-content p {
    font-size: 14px;
    color: #666;
    margin: 0;
}

@keyframes floatAnimation {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.clients-section {
    background: #fff;
    padding: 80px 0;
    border-bottom: 1px solid #eee;
}

.clients-wrapper {
    text-align: center;
}

.clients-wrapper h4 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 50px;
    color: #333;
}

.clients-slider {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 60px;
    flex-wrap: wrap;
}

.client-item {
    opacity: 0.6;
    transition: opacity 0.3s ease;
}

.client-item:hover {
    opacity: 1;
}

.client-item img {
    max-height: 60px;
    width: auto;
    filter: grayscale(100%);
    transition: filter 0.3s ease;
}

.client-item:hover img {
    filter: grayscale(0%);
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 36px;
    }
    
    .hero-description {
        font-size: 16px;
    }
    
    .hero-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .hero-stats {
        gap: 20px;
        justify-content: center;
    }
    
    .stat-item h3 {
        font-size: 24px;
    }
    
    .floating-card {
        display: none;
    }
    
    .clients-slider {
        gap: 30px;
    }
    
    .client-item img {
        max-height: 40px;
    }
}
</style>
@endpush