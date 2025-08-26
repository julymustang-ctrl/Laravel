@extends('layouts.app')

@section('title', 'Home - Social Media Marketing Agency')
@section('meta_description', 'Leading social media marketing agency providing comprehensive digital marketing solutions, content creation, and brand management services.')

@section('content')
<!-- Hero Slider Section Start -->
<section class="hero-slider-section">
    <div class="hero-slider">
        <!-- Slide 1 -->
        <div class="hero-slide" style="background-image: url('{{ asset('assets/img/hero/slide-1.jpg') }}');">
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-xl-8 col-lg-8">
                        <div class="slide-content">
                            <span class="slide-subtitle">Social Media Marketing</span>
                            <h1 class="slide-title">Grow Your Brand with <span>Creative Content</span></h1>
                            <p class="slide-description">We help businesses build strong social media presence through engaging content and strategic campaigns that drive real results.</p>
                            <div class="slide-buttons">
                                <a href="{{ route('services') }}" class="main-btn btn-filled">Get Started</a>
                                <a href="{{ route('contact') }}" class="main-btn btn-border">Free Consultation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="hero-slide" style="background-image: url('{{ asset('assets/img/hero/slide-2.jpg') }}');">
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-xl-8 col-lg-8">
                        <div class="slide-content">
                            <span class="slide-subtitle">Digital Marketing</span>
                            <h1 class="slide-title">Boost Your <span>Online Presence</span> Today</h1>
                            <p class="slide-description">Transform your digital strategy with our comprehensive social media management and content creation services.</p>
                            <div class="slide-buttons">
                                <a href="{{ route('projects') }}" class="main-btn btn-filled">View Portfolio</a>
                                <a href="{{ route('about') }}" class="main-btn btn-border">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="hero-slide" style="background-image: url('{{ asset('assets/img/hero/slide-3.jpg') }}');">
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-xl-8 col-lg-8">
                        <div class="slide-content">
                            <span class="slide-subtitle">Brand Strategy</span>
                            <h1 class="slide-title">Build <span>Engaging Communities</span> Online</h1>
                            <p class="slide-description">Create meaningful connections with your audience through authentic storytelling and community-driven content strategies.</p>
                            <div class="slide-buttons">
                                <a href="{{ route('pricing') }}" class="main-btn btn-filled">View Pricing</a>
                                <a href="{{ route('team') }}" class="main-btn btn-border">Meet Our Team</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Slider Navigation -->
    <div class="slider-navigation">
        <div class="slider-prev"><i class="fas fa-chevron-left"></i></div>
        <div class="slider-next"><i class="fas fa-chevron-right"></i></div>
    </div>
    
    <!-- Slider Pagination -->
    <div class="slider-pagination"></div>
</section>
<!-- Hero Slider Section End -->

<!-- Stats Section Start -->
<section class="stats-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="stats-banner-item">
                    <div class="stats-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stats-content">
                        <h3 class="stats-number" data-count="250">0</h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="stats-banner-item">
                    <div class="stats-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="stats-content">
                        <h3 class="stats-number" data-count="1000">0</h3>
                        <p>Projects Completed</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="stats-banner-item">
                    <div class="stats-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stats-content">
                        <h3 class="stats-number" data-count="15">0</h3>
                        <p>Awards Won</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="stats-banner-item">
                    <div class="stats-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stats-content">
                        <h3 class="stats-number" data-count="5">0</h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Stats Section End -->

@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<style>
.hero-slider-section {
    position: relative;
    height: 100vh;
    overflow: hidden;
}

.hero-slider {
    height: 100%;
}

.hero-slide {
    height: 100vh;
    background-size: cover;
    background-position: center;
    position: relative;
    display: flex;
    align-items: center;
}

.hero-slide::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0,123,255,0.8), rgba(0,86,179,0.8));
}

.slide-content {
    position: relative;
    z-index: 2;
    color: #fff;
    animation: slideInLeft 1s ease-out;
}

.slide-subtitle {
    font-size: 18px;
    font-weight: 600;
    color: #ffd700;
    margin-bottom: 20px;
    display: block;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.slide-title {
    font-size: 64px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 25px;
}

.slide-title span {
    color: #ffd700;
}

.slide-description {
    font-size: 22px;
    line-height: 1.6;
    margin-bottom: 40px;
    color: rgba(255,255,255,0.9);
    max-width: 600px;
}

.slide-buttons {
    display: flex;
    gap: 25px;
    flex-wrap: wrap;
}

.slider-navigation {
    position: absolute;
    top: 50%;
    width: 100%;
    z-index: 10;
    display: flex;
    justify-content: space-between;
    padding: 0 50px;
    transform: translateY(-50%);
}

.slider-prev,
.slider-next {
    width: 60px;
    height: 60px;
    background: rgba(255,255,255,0.2);
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.slider-prev:hover,
.slider-next:hover {
    background: rgba(255,255,255,0.3);
    border-color: rgba(255,255,255,0.5);
    transform: scale(1.1);
}

.slider-pagination {
    position: absolute;
    bottom: 50px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    display: flex;
    gap: 15px;
}

.slider-pagination .swiper-pagination-bullet {
    width: 15px;
    height: 15px;
    background: rgba(255,255,255,0.5);
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s ease;
}

.slider-pagination .swiper-pagination-bullet-active {
    background: #ffd700;
    transform: scale(1.2);
}

.stats-banner-section {
    background: #fff;
    padding: 80px 0;
    box-shadow: 0 -10px 30px rgba(0,0,0,0.1);
    position: relative;
    z-index: 5;
}

.stats-banner-item {
    text-align: center;
    padding: 30px 20px;
    background: #f8f9fa;
    border-radius: 12px;
    margin-bottom: 30px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.stats-banner-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #007bff, #0056b3);
    transition: all 0.3s ease;
    z-index: 1;
}

.stats-banner-item:hover::before {
    left: 0;
}

.stats-banner-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}

.stats-banner-item:hover .stats-icon,
.stats-banner-item:hover .stats-content {
    color: #fff;
    position: relative;
    z-index: 2;
}

.stats-icon {
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
    position: relative;
    z-index: 2;
}

.stats-banner-item:hover .stats-icon {
    background: rgba(255,255,255,0.2);
}

.stats-number {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #333;
    position: relative;
    z-index: 2;
    transition: color 0.3s ease;
}

.stats-banner-item p {
    font-size: 18px;
    color: #666;
    font-weight: 500;
    position: relative;
    z-index: 2;
    transition: color 0.3s ease;
}

@keyframes slideInLeft {
    0% {
        opacity: 0;
        transform: translateX(-50px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    0% {
        opacity: 0;
        transform: translateX(50px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .slide-title {
        font-size: 36px;
    }
    
    .slide-description {
        font-size: 16px;
    }
    
    .slide-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .slider-navigation {
        padding: 0 20px;
    }
    
    .slider-prev,
    .slider-next {
        width: 50px;
        height: 50px;
        font-size: 16px;
    }
    
    .slider-pagination {
        bottom: 30px;
    }
    
    .stats-number {
        font-size: 36px;
    }
    
    .stats-banner-item {
        margin-bottom: 20px;
    }
}

@media (max-width: 480px) {
    .slide-title {
        font-size: 28px;
    }
    
    .slide-subtitle {
        font-size: 14px;
    }
    
    .slide-description {
        font-size: 14px;
    }
}
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper
    const heroSwiper = new Swiper('.hero-slider', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 1000,
        navigation: {
            nextEl: '.slider-next',
            prevEl: '.slider-prev',
        },
        pagination: {
            el: '.slider-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"></span>';
            },
        },
        on: {
            slideChangeTransitionStart: function () {
                // Add animation classes to current slide content
                const activeSlide = this.slides[this.activeIndex];
                const slideContent = activeSlide.querySelector('.slide-content');
                if (slideContent) {
                    slideContent.style.animation = 'none';
                    setTimeout(() => {
                        slideContent.style.animation = 'slideInLeft 1s ease-out';
                    }, 100);
                }
            }
        }
    });

    // Stats Counter Animation
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statsNumbers = entry.target.querySelectorAll('.stats-number');
                statsNumbers.forEach(stat => {
                    const countTo = parseInt(stat.getAttribute('data-count'));
                    let currentCount = 0;
                    const increment = Math.ceil(countTo / 100);
                    
                    const counter = setInterval(() => {
                        currentCount += increment;
                        if (currentCount >= countTo) {
                            stat.textContent = countTo;
                            clearInterval(counter);
                        } else {
                            stat.textContent = currentCount;
                        }
                    }, 20);
                });
                statsObserver.unobserve(entry.target);
            }
        });
    });

    const statsSection = document.querySelector('.stats-banner-section');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // Keyboard navigation for slider
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            heroSwiper.slidePrev();
        } else if (e.key === 'ArrowRight') {
            heroSwiper.slideNext();
        }
    });

    // Pause autoplay on hover
    const heroSection = document.querySelector('.hero-slider-section');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', () => {
            heroSwiper.autoplay.stop();
        });
        
        heroSection.addEventListener('mouseleave', () => {
            heroSwiper.autoplay.start();
        });
    }
});
</script>
@endpush