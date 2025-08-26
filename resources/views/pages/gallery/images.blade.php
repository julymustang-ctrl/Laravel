@extends('layouts.app')

@section('title', 'Image Gallery - Our Work Portfolio')
@section('meta_description', 'Browse through our extensive portfolio of social media content, designs, and marketing campaigns we have created for our clients.')

@section('content')
<!-- Page Title Start -->
<section class="page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                    <h2 class="page-title">Image Gallery</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('gallery.image') }}">Gallery</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Images</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Title End -->

<!-- Gallery Section Start -->
<section class="gallery-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-center mb-70">
                    <span class="sub-title">Portfolio</span>
                    <h2>Our Creative Work</h2>
                    <p>Explore our gallery of stunning social media designs, campaigns, and marketing materials created for our clients.</p>
                </div>
            </div>
        </div>
        
        <!-- Gallery Filter -->
        <div class="row">
            <div class="col-xl-12">
                <div class="gallery-filter text-center mb-50">
                    <button class="filter-btn active" data-filter="*">All Projects</button>
                    <button class="filter-btn" data-filter=".social-media">Social Media</button>
                    <button class="filter-btn" data-filter=".branding">Branding</button>
                    <button class="filter-btn" data-filter=".advertising">Advertising</button>
                    <button class="filter-btn" data-filter=".content">Content Design</button>
                    <button class="filter-btn" data-filter=".campaigns">Campaigns</button>
                </div>
            </div>
        </div>
        
        <!-- Gallery Grid -->
        <div class="row gallery-grid">
            @foreach($galleryImages as $index => $image)
            <div class="col-xl-4 col-lg-4 col-md-6 gallery-item {{ implode(' ', $image['categories']) }}">
                <div class="gallery-wrapper">
                    <div class="gallery-img">
                        <img src="{{ asset('assets/img/gallery/' . $image['image']) }}" alt="{{ $image['title'] }}">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>{{ $image['title'] }}</h4>
                                <p>{{ $image['category'] }}</p>
                                <div class="gallery-links">
                                    <a href="{{ asset('assets/img/gallery/' . $image['image']) }}" class="gallery-link" data-lightbox="gallery">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                    @if(isset($image['project_url']))
                                    <a href="{{ $image['project_url'] }}" class="project-link" target="_blank">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-info">
                        <h5>{{ $image['title'] }}</h5>
                        <span class="gallery-category">{{ $image['category'] }}</span>
                        @if(isset($image['client']))
                        <p class="client-name">Client: {{ $image['client'] }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Load More Button -->
        <div class="row">
            <div class="col-xl-12">
                <div class="load-more-wrapper text-center mt-50">
                    <button class="main-btn btn-filled load-more-btn">Load More Images</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Section End -->

<!-- Gallery Stats Section Start -->
<section class="stats-section">
    <div class="container">
        <div class="stats-wrapper">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="stats-item">
                        <div class="stats-icon">
                            <i class="fas fa-images"></i>
                        </div>
                        <div class="stats-content">
                            <h3 class="stats-number" data-count="500">0</h3>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="stats-item">
                        <div class="stats-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stats-content">
                            <h3 class="stats-number" data-count="150">0</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="stats-item">
                        <div class="stats-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="stats-content">
                            <h3 class="stats-number" data-count="25">0</h3>
                            <p>Awards Won</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="stats-item">
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
    </div>
</section>
<!-- Gallery Stats Section End -->

<!-- CTA Section Start -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-wrapper" style="background-image: url('{{ asset('assets/img/cta-bg.jpg') }}');">
                    <div class="cta-content text-center">
                        <h2>Ready to Start Your Next Project?</h2>
                        <p>Let's create amazing visual content that will elevate your brand and engage your audience.</p>
                        <div class="cta-buttons">
                            <a href="{{ route('contact') }}" class="main-btn btn-filled">Get Started</a>
                            <a href="{{ route('services') }}" class="main-btn btn-border">View Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section End -->
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">
<style>
.gallery-section {
    background: #f8f9fa;
}

.gallery-filter {
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

.gallery-grid {
    display: flex;
    flex-wrap: wrap;
}

.gallery-item {
    margin-bottom: 30px;
    opacity: 1;
    transition: all 0.3s ease;
}

.gallery-item.hidden {
    opacity: 0;
    pointer-events: none;
}

.gallery-wrapper {
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.gallery-wrapper:hover {
    transform: translateY(-5px);
}

.gallery-img {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.gallery-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-overlay {
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
}

.gallery-wrapper:hover .gallery-overlay {
    opacity: 1;
}

.gallery-wrapper:hover .gallery-img img {
    transform: scale(1.1);
}

.overlay-content {
    text-align: center;
    color: #fff;
}

.overlay-content h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}

.overlay-content p {
    margin-bottom: 20px;
    opacity: 0.9;
}

.gallery-links {
    display: flex;
    gap: 15px;
    justify-content: center;
}

.gallery-link,
.project-link {
    width: 50px;
    height: 50px;
    background: rgba(255,255,255,0.2);
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
}

.gallery-link:hover,
.project-link:hover {
    background: #fff;
    color: #007bff;
    transform: scale(1.1);
}

.gallery-info {
    padding: 25px 20px;
}

.gallery-info h5 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 8px;
    color: #333;
}

.gallery-category {
    color: #007bff;
    font-weight: 600;
    font-size: 14px;
}

.client-name {
    color: #666;
    font-size: 14px;
    margin-top: 5px;
}

.stats-section {
    background: linear-gradient(135deg, #007bff, #0056b3);
    padding: 80px 0;
}

.stats-wrapper {
    background: rgba(255,255,255,0.1);
    border-radius: 12px;
    padding: 60px 40px;
}

.stats-item {
    text-align: center;
    color: #fff;
}

.stats-icon {
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

.stats-number {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #fff;
}

.stats-item p {
    font-size: 18px;
    opacity: 0.9;
}

.cta-section {
    padding: 120px 0;
}

.cta-wrapper {
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding: 100px 50px;
    border-radius: 12px;
    position: relative;
    overflow: hidden;
}

.cta-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
}

.cta-content {
    position: relative;
    z-index: 2;
}

.cta-content h2 {
    font-size: 48px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 20px;
}

.cta-content p {
    font-size: 20px;
    color: rgba(255,255,255,0.9);
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

.load-more-btn {
    position: relative;
    overflow: hidden;
}

.load-more-btn:hover {
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .gallery-filter {
        flex-direction: column;
        align-items: center;
    }
    
    .filter-btn {
        width: 200px;
    }
    
    .gallery-img {
        height: 200px;
    }
    
    .cta-content h2 {
        font-size: 32px;
    }
    
    .cta-content p {
        font-size: 16px;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .stats-number {
        font-size: 36px;
    }
}
</style>
@endpush

@push('scripts')
<script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Isotope
    var $grid = $('.gallery-grid').isotope({
        itemSelector: '.gallery-item',
        layoutMode: 'fitRows'
    });

    // Filter items on button click
    $('.gallery-filter').on('click', '.filter-btn', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
        
        // Update active button
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
    });

    // Stats Counter Animation
    $('.stats-number').each(function() {
        var $this = $(this);
        var countTo = $this.attr('data-count');
        
        $({ countNum: $this.text()}).animate({
            countNum: countTo
        }, {
            duration: 2000,
            easing: 'linear',
            step: function() {
                $this.text(Math.floor(this.countNum));
            },
            complete: function() {
                $this.text(this.countNum);
            }
        });
    });

    // Load More Functionality
    var itemsToShow = 9;
    var currentlyShown = itemsToShow;
    
    $('.gallery-item').slice(itemsToShow).hide();
    
    $('.load-more-btn').on('click', function(e) {
        e.preventDefault();
        var hiddenItems = $('.gallery-item:hidden');
        
        if (hiddenItems.length > 0) {
            hiddenItems.slice(0, itemsToShow).slideDown();
            currentlyShown += itemsToShow;
            
            if ($('.gallery-item:hidden').length === 0) {
                $(this).text('All Images Loaded').prop('disabled', true);
            }
        }
    });

    // Lightbox configuration
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'showImageNumberLabel': true
    });
});
</script>
@endpush