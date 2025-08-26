@extends('layouts.app')

@section('title', 'Video Gallery - Marketing Campaign Videos')
@section('meta_description', 'Watch our collection of social media campaign videos, promotional content, and marketing videos created for various clients and industries.')

@section('content')
<!-- Page Title Start -->
<section class="page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                    <h2 class="page-title">Video Gallery</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('gallery.video') }}">Gallery</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Videos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Title End -->

<!-- Video Gallery Section Start -->
<section class="video-gallery-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-center mb-70">
                    <span class="sub-title">Video Portfolio</span>
                    <h2>Our Video Creations</h2>
                    <p>Discover our collection of engaging video content, promotional campaigns, and marketing materials that drive results.</p>
                </div>
            </div>
        </div>
        
        <!-- Video Filter -->
        <div class="row">
            <div class="col-xl-12">
                <div class="video-filter text-center mb-50">
                    <button class="filter-btn active" data-filter="*">All Videos</button>
                    <button class="filter-btn" data-filter=".promotional">Promotional</button>
                    <button class="filter-btn" data-filter=".campaign">Campaigns</button>
                    <button class="filter-btn" data-filter=".testimonial">Testimonials</button>
                    <button class="filter-btn" data-filter=".explainer">Explainers</button>
                    <button class="filter-btn" data-filter=".social">Social Media</button>
                </div>
            </div>
        </div>
        
        <!-- Featured Video -->
        <div class="row mb-70">
            <div class="col-xl-12">
                <div class="featured-video">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/{{ $featuredVideo['youtube_id'] }}" 
                                    title="{{ $featuredVideo['title'] }}" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="featured-info">
                            <div class="video-meta">
                                <span class="category">{{ $featuredVideo['category'] }}</span>
                                <span class="duration">{{ $featuredVideo['duration'] }}</span>
                            </div>
                            <h3>{{ $featuredVideo['title'] }}</h3>
                            <p>{{ $featuredVideo['description'] }}</p>
                            <div class="video-stats">
                                <div class="stat-item">
                                    <i class="fas fa-eye"></i>
                                    <span>{{ $featuredVideo['views'] }} views</span>
                                </div>
                                <div class="stat-item">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span>{{ $featuredVideo['likes'] }} likes</span>
                                </div>
                                <div class="stat-item">
                                    <i class="fas fa-calendar"></i>
                                    <span>{{ $featuredVideo['date'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Video Grid -->
        <div class="row video-grid">
            @foreach($galleryVideos as $video)
            <div class="col-xl-4 col-lg-6 col-md-6 video-item {{ implode(' ', $video['categories']) }}">
                <div class="video-wrapper">
                    <div class="video-thumbnail">
                        <img src="{{ asset('assets/img/video-thumbnails/' . $video['thumbnail']) }}" alt="{{ $video['title'] }}">
                        <div class="play-btn" data-video-id="{{ $video['youtube_id'] }}">
                            <i class="fas fa-play"></i>
                        </div>
                        <div class="video-duration">{{ $video['duration'] }}</div>
                        <div class="video-overlay">
                            <div class="overlay-content">
                                <h5>{{ $video['title'] }}</h5>
                                <p>{{ $video['category'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="video-info">
                        <div class="video-meta">
                            <span class="category">{{ $video['category'] }}</span>
                            @if(isset($video['client']))
                            <span class="client">{{ $video['client'] }}</span>
                            @endif
                        </div>
                        <h5>{{ $video['title'] }}</h5>
                        <p>{{ $video['description'] }}</p>
                        <div class="video-stats">
                            <span><i class="fas fa-eye"></i> {{ $video['views'] }}</span>
                            <span><i class="fas fa-heart"></i> {{ $video['likes'] }}</span>
                            <span><i class="fas fa-calendar"></i> {{ $video['date'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Load More Button -->
        <div class="row">
            <div class="col-xl-12">
                <div class="load-more-wrapper text-center mt-50">
                    <button class="main-btn btn-filled load-more-btn">Load More Videos</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Gallery Section End -->

<!-- Video Stats Section Start -->
<section class="video-stats-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="stats-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="stats-item">
                                <div class="stats-icon">
                                    <i class="fas fa-video"></i>
                                </div>
                                <div class="stats-content">
                                    <h3 class="stats-number" data-count="200">0</h3>
                                    <p>Videos Created</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="stats-item">
                                <div class="stats-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="stats-content">
                                    <h3 class="stats-number" data-count="1500000">0</h3>
                                    <p>Total Views</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="stats-item">
                                <div class="stats-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="stats-content">
                                    <h3 class="stats-number" data-count="5000">0</h3>
                                    <p>Hours Watched</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="stats-item">
                                <div class="stats-icon">
                                    <i class="fas fa-thumbs-up"></i>
                                </div>
                                <div class="stats-content">
                                    <h3 class="stats-number" data-count="95">0</h3>
                                    <p>Satisfaction Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Stats Section End -->

<!-- Video Services Section Start -->
<section class="video-services-section pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="video-services-content">
                    <div class="section-title text-left mb-40">
                        <span class="sub-title">Video Services</span>
                        <h2>Professional Video Production</h2>
                        <p>From concept to completion, we create compelling video content that tells your story and drives engagement across all platforms.</p>
                    </div>
                    
                    <div class="services-list">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <div class="service-content">
                                <h4>Promotional Videos</h4>
                                <p>Eye-catching promotional content that showcases your products and services effectively.</p>
                            </div>
                        </div>
                        
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div class="service-content">
                                <h4>Social Media Videos</h4>
                                <p>Platform-optimized video content designed for maximum engagement and reach.</p>
                            </div>
                        </div>
                        
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div class="service-content">
                                <h4>Explainer Videos</h4>
                                <p>Clear, concise videos that explain complex concepts in an engaging way.</p>
                            </div>
                        </div>
                        
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="service-content">
                                <h4>Testimonial Videos</h4>
                                <p>Authentic customer stories that build trust and credibility for your brand.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="video-cta mt-40">
                        <a href="{{ route('contact') }}" class="main-btn btn-filled">Start Your Video Project</a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-6">
                <div class="video-services-image">
                    <img src="{{ asset('assets/img/video-production.jpg') }}" alt="Video Production">
                    <div class="video-play-btn" data-video-id="dQw4w9WgXcQ">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Services Section End -->

<!-- Video Modal -->
<div class="video-modal" id="videoModal">
    <div class="video-modal-content">
        <span class="video-modal-close">&times;</span>
        <div class="video-modal-body">
            <iframe id="videoFrame" src="" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.video-gallery-section {
    background: #f8f9fa;
}

.video-filter {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

.filter-btn {
    padding: 12px 30px;
    background: #fff;
    border: 2px solid #e9ecef;
    border-radius: 50px;
    color: #333;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn:hover,
.filter-btn.active {
    background: #007bff;
    border-color: #007bff;
    color: #fff;
}

.featured-video .video-wrapper {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}

.video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.featured-info {
    padding: 40px;
}

.video-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.video-meta .category {
    background: #007bff;
    color: #fff;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
}

.video-meta .duration {
    background: #28a745;
    color: #fff;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
}

.featured-info h3 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #333;
}

.featured-info p {
    color: #666;
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 25px;
}

.video-stats {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
}

.stat-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #666;
    font-size: 14px;
}

.stat-item i {
    color: #007bff;
}

.video-grid {
    display: flex;
    flex-wrap: wrap;
}

.video-item {
    margin-bottom: 30px;
    opacity: 1;
    transition: all 0.3s ease;
}

.video-item.hidden {
    opacity: 0;
    pointer-events: none;
}

.video-item .video-wrapper {
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.video-item .video-wrapper:hover {
    transform: translateY(-5px);
}

.video-thumbnail {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.video-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 70px;
    height: 70px;
    background: rgba(0,123,255,0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 24px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.play-btn:hover {
    background: #007bff;
    transform: translate(-50%, -50%) scale(1.1);
}

.video-duration {
    position: absolute;
    bottom: 10px;
    right: 10px;
    background: rgba(0,0,0,0.8);
    color: #fff;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
}

.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,123,255,0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
    color: #fff;
    text-align: center;
}

.video-wrapper:hover .video-overlay {
    opacity: 1;
}

.video-wrapper:hover .video-thumbnail img {
    transform: scale(1.1);
}

.overlay-content h5 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
}

.video-info {
    padding: 25px 20px;
}

.video-info .video-meta {
    margin-bottom: 15px;
}

.video-info .category {
    background: #007bff;
    color: #fff;
    padding: 3px 12px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
}

.video-info .client {
    color: #666;
    font-size: 12px;
    font-weight: 600;
}

.video-info h5 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
}

.video-info p {
    color: #666;
    font-size: 14px;
    line-height: 1.5;
    margin-bottom: 15px;
}

.video-info .video-stats {
    display: flex;
    gap: 15px;
    font-size: 12px;
    color: #999;
}

.video-stats-section {
    background: linear-gradient(135deg, #007bff, #0056b3);
    padding: 80px 0;
}

.video-stats-section .stats-wrapper {
    background: rgba(255,255,255,0.1);
    border-radius: 12px;
    padding: 60px 40px;
}

.video-stats-section .stats-item {
    text-align: center;
    color: #fff;
}

.video-stats-section .stats-icon {
    width: 80px;
    height: 80px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-size: 30px;
}

.video-stats-section .stats-number {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #fff;
}

.video-stats-section .stats-item p {
    font-size: 18px;
    opacity: 0.9;
}

.video-services-section {
    background: #fff;
}

.services-list {
    margin-bottom: 30px;
}

.service-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 30px;
    padding: 25px;
    background: #f8f9fa;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.service-item:hover {
    background: #fff;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transform: translateX(10px);
}

.service-icon {
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

.service-content h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
}

.service-content p {
    color: #666;
    line-height: 1.6;
}

.video-services-image {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
}

.video-services-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.video-play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: rgba(0,123,255,0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.video-play-btn:hover {
    background: #007bff;
    transform: translate(-50%, -50%) scale(1.1);
}

/* Video Modal */
.video-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.9);
}

.video-modal-content {
    position: relative;
    margin: 5% auto;
    width: 80%;
    max-width: 900px;
}

.video-modal-close {
    position: absolute;
    top: -40px;
    right: 0;
    color: #fff;
    font-size: 30px;
    cursor: pointer;
    z-index: 10000;
}

.video-modal-body {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}

.video-modal-body iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

@media (max-width: 768px) {
    .video-filter {
        flex-direction: column;
        align-items: center;
    }
    
    .filter-btn {
        width: 200px;
    }
    
    .video-thumbnail {
        height: 180px;
    }
    
    .featured-info {
        padding: 30px 20px;
    }
    
    .featured-info h3 {
        font-size: 24px;
    }
    
    .video-stats {
        gap: 20px;
    }
    
    .service-item {
        flex-direction: column;
        text-align: center;
    }
    
    .video-modal-content {
        width: 95%;
        margin: 10% auto;
    }
    
    .stats-number {
        font-size: 36px;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    $('.video-filter').on('click', '.filter-btn', function() {
        var filterValue = $(this).attr('data-filter');
        
        if (filterValue === '*') {
            $('.video-item').show();
        } else {
            $('.video-item').hide();
            $(filterValue).show();
        }
        
        // Update active button
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
    });

    // Video Modal functionality
    function openVideoModal(videoId) {
        const modal = document.getElementById('videoModal');
        const iframe = document.getElementById('videoFrame');
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        modal.style.display = 'block';
    }

    function closeVideoModal() {
        const modal = document.getElementById('videoModal');
        const iframe = document.getElementById('videoFrame');
        iframe.src = '';
        modal.style.display = 'none';
    }

    // Play button clicks
    $('.play-btn, .video-play-btn').on('click', function() {
        const videoId = $(this).attr('data-video-id');
        openVideoModal(videoId);
    });

    // Close modal
    $('.video-modal-close, .video-modal').on('click', function(e) {
        if (e.target === this) {
            closeVideoModal();
        }
    });

    // Stats Counter Animation
    $('.stats-number').each(function() {
        var $this = $(this);
        var countTo = parseInt($this.attr('data-count'));
        
        $({ countNum: 0}).animate({
            countNum: countTo
        }, {
            duration: 2000,
            easing: 'linear',
            step: function() {
                if (countTo >= 1000000) {
                    $this.text((this.countNum / 1000000).toFixed(1) + 'M');
                } else if (countTo >= 1000) {
                    $this.text((this.countNum / 1000).toFixed(0) + 'K');
                } else {
                    $this.text(Math.floor(this.countNum));
                }
            },
            complete: function() {
                if (countTo >= 1000000) {
                    $this.text((countTo / 1000000).toFixed(1) + 'M');
                } else if (countTo >= 1000) {
                    $this.text((countTo / 1000).toFixed(0) + 'K');
                } else {
                    $this.text(countTo);
                }
            }
        });
    });

    // Load More Functionality
    var itemsToShow = 6;
    $('.video-item').slice(itemsToShow).hide();
    
    $('.load-more-btn').on('click', function(e) {
        e.preventDefault();
        var hiddenItems = $('.video-item:hidden');
        
        if (hiddenItems.length > 0) {
            hiddenItems.slice(0, itemsToShow).slideDown();
            
            if ($('.video-item:hidden').length === 0) {
                $(this).text('All Videos Loaded').prop('disabled', true);
            }
        }
    });
});
</script>
@endpush