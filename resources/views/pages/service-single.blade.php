@extends('layouts.app')

@section('title', $service['title'] . ' - Our Services')
@section('meta_description', $service['description'])

@section('content')
<!-- Page Title Start -->
<section class="page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                    <h2 class="page-title">{{ $service['title'] }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $service['title'] }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Title End -->

<!-- Service Details Section Start -->
<section class="service-details-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <!-- Service Hero -->
                <div class="service-hero mb-50">
                    <div class="service-image">
                        <img src="{{ asset('assets/img/services/' . $service['image']) }}" alt="{{ $service['title'] }}">
                        @if(isset($service['video_url']))
                        <div class="service-video-btn" data-video-url="{{ $service['video_url'] }}">
                            <i class="fas fa-play"></i>
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Service Overview -->
                <div class="service-overview mb-50">
                    <h2>{{ $service['title'] }}</h2>
                    <p class="service-description">{{ $service['description'] }}</p>
                    <p>{{ $service['detailed_description'] }}</p>
                </div>
                
                <!-- Service Features -->
                @if(isset($service['features']))
                <div class="service-features mb-50">
                    <h3>What's Included</h3>
                    <div class="row">
                        @foreach($service['features'] as $feature)
                        <div class="col-xl-6 col-lg-6">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="{{ $feature['icon'] }}"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>{{ $feature['title'] }}</h4>
                                    <p>{{ $feature['description'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Service Process -->
                @if(isset($service['process']))
                <div class="service-process mb-50">
                    <h3>Our Process</h3>
                    <div class="process-steps">
                        @foreach($service['process'] as $index => $step)
                        <div class="process-step">
                            <div class="step-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                            <div class="step-content">
                                <h4>{{ $step['title'] }}</h4>
                                <p>{{ $step['description'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Service Benefits -->
                @if(isset($service['benefits']))
                <div class="service-benefits mb-50">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="benefits-content">
                                <h3>Why Choose This Service?</h3>
                                <ul class="benefits-list">
                                    @foreach($service['benefits'] as $benefit)
                                    <li><i class="fas fa-check"></i> {{ $benefit }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="benefits-image">
                                <img src="{{ asset('assets/img/services/benefits-' . $service['slug'] . '.jpg') }}" alt="Benefits">
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                
                <!-- Service FAQ -->
                @if(isset($service['faq']))
                <div class="service-faq mb-50">
                    <h3>Frequently Asked Questions</h3>
                    <div class="accordion" id="serviceFaqAccordion">
                        @foreach($service['faq'] as $index => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading{{ $index }}">
                                <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button" 
                                        data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $index }}" 
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faqCollapse{{ $index }}">
                                    {{ $faq['question'] }}
                                </button>
                            </h2>
                            <div id="faqCollapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                                 aria-labelledby="faqHeading{{ $index }}" data-bs-parent="#serviceFaqAccordion">
                                <div class="accordion-body">
                                    <p>{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Service CTA -->
                <div class="service-cta">
                    <div class="cta-wrapper">
                        <div class="cta-content">
                            <h3>Ready to Get Started?</h3>
                            <p>Let's discuss how {{ $service['title'] }} can help grow your business and achieve your marketing goals.</p>
                            <div class="cta-buttons">
                                <a href="{{ route('contact') }}" class="main-btn btn-filled">Get Quote</a>
                                <a href="tel:+1234567890" class="main-btn btn-border">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4">
                <div class="service-sidebar">
                    <!-- Service Info Widget -->
                    <div class="sidebar-widget service-info-widget">
                        <h3 class="widget-title">Service Information</h3>
                        <ul class="service-info-list">
                            <li>
                                <strong>Service Category:</strong>
                                <span>{{ $service['category'] }}</span>
                            </li>
                            @if(isset($service['duration']))
                            <li>
                                <strong>Delivery Time:</strong>
                                <span>{{ $service['duration'] }}</span>
                            </li>
                            @endif
                            @if(isset($service['price_range']))
                            <li>
                                <strong>Price Range:</strong>
                                <span>{{ $service['price_range'] }}</span>
                            </li>
                            @endif
                            @if(isset($service['team_size']))
                            <li>
                                <strong>Team Size:</strong>
                                <span>{{ $service['team_size'] }}</span>
                            </li>
                            @endif
                        </ul>
                        <div class="service-rating">
                            <div class="rating-stars">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star {{ $i <= ($service['rating'] ?? 5) ? 'active' : '' }}"></i>
                                @endfor
                            </div>
                            <span class="rating-text">({{ $service['rating'] ?? 5.0 }}/5.0 - {{ $service['reviews_count'] ?? 50 }} reviews)</span>
                        </div>
                    </div>
                    
                    <!-- Contact Widget -->
                    <div class="sidebar-widget contact-widget">
                        <h3 class="widget-title">Need Help?</h3>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <span>Call Us</span>
                                    <a href="tel:+1234567890">+123 456 7890</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <span>Email Us</span>
                                    <a href="mailto:info@company.com">info@company.com</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="content">
                                    <span>Business Hours</span>
                                    <span>Mon - Fri: 9AM - 6PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Related Services -->
                    <div class="sidebar-widget related-services-widget">
                        <h3 class="widget-title">Related Services</h3>
                        <ul class="related-services-list">
                            @foreach($relatedServices as $relatedService)
                            <li>
                                <a href="{{ route('services.single', $relatedService['id']) }}">
                                    <div class="service-thumb">
                                        <img src="{{ asset('assets/img/services/thumb-' . $relatedService['slug'] . '.jpg') }}" alt="{{ $relatedService['title'] }}">
                                    </div>
                                    <div class="service-info">
                                        <h5>{{ $relatedService['title'] }}</h5>
                                        <span class="service-price">{{ $relatedService['price_range'] ?? 'Contact for Quote' }}</span>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Download Brochure -->
                    <div class="sidebar-widget download-widget">
                        <h3 class="widget-title">Download Resources</h3>
                        <div class="download-items">
                            <a href="{{ asset('assets/downloads/service-brochure.pdf') }}" class="download-item" target="_blank">
                                <div class="download-icon">
                                    <i class="fas fa-file-pdf"></i>
                                </div>
                                <div class="download-content">
                                    <h5>Service Brochure</h5>
                                    <span>PDF - 2.5 MB</span>
                                </div>
                            </a>
                            <a href="{{ asset('assets/downloads/pricing-guide.pdf') }}" class="download-item" target="_blank">
                                <div class="download-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="download-content">
                                    <h5>Pricing Guide</h5>
                                    <span>PDF - 1.8 MB</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Details Section End -->

<!-- Related Projects Section Start -->
@if(isset($relatedProjects))
<section class="related-projects-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-center mb-70">
                    <span class="sub-title">Portfolio</span>
                    <h2>Related Projects</h2>
                    <p>Check out some of our successful {{ $service['title'] }} projects</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            @foreach($relatedProjects as $project)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('assets/img/projects/' . $project['image']) }}" alt="{{ $project['title'] }}">
                        <div class="project-overlay">
                            <div class="overlay-content">
                                <h4>{{ $project['title'] }}</h4>
                                <p>{{ $project['category'] }}</p>
                                <a href="{{ route('projects.single', $project['id']) }}" class="project-link">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <h4><a href="{{ route('projects.single', $project['id']) }}">{{ $project['title'] }}</a></h4>
                        <span class="project-category">{{ $project['category'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- Related Projects Section End -->
@endsection

@push('styles')
<style>
.service-details-section {
    background: #f8f9fa;
}

.service-hero {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}

.service-image {
    position: relative;
    width: 100%;
    height: 400px;
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.service-video-btn {
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

.service-video-btn:hover {
    background: #007bff;
    transform: translate(-50%, -50%) scale(1.1);
}

.service-overview h2 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
}

.service-description {
    font-size: 18px;
    color: #666;
    margin-bottom: 25px;
    line-height: 1.6;
}

.service-overview p {
    color: #666;
    line-height: 1.7;
    margin-bottom: 20px;
}

.service-features h3,
.service-process h3,
.service-benefits h3,
.service-faq h3 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 30px;
    color: #333;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 30px;
    padding: 25px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.feature-icon {
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
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
}

.feature-content p {
    color: #666;
    line-height: 1.6;
}

.process-steps {
    position: relative;
}

.process-step {
    display: flex;
    align-items: flex-start;
    gap: 30px;
    margin-bottom: 40px;
    position: relative;
}

.process-step::before {
    content: '';
    position: absolute;
    left: 35px;
    top: 70px;
    bottom: -40px;
    width: 2px;
    background: #e9ecef;
}

.process-step:last-child::before {
    display: none;
}

.step-number {
    width: 70px;
    height: 70px;
    background: #007bff;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: 700;
    flex-shrink: 0;
    position: relative;
    z-index: 2;
}

.step-content h4 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #333;
}

.step-content p {
    color: #666;
    line-height: 1.6;
}

.benefits-list {
    list-style: none;
    padding: 0;
}

.benefits-list li {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
    color: #666;
    font-size: 16px;
}

.benefits-list i {
    color: #28a745;
    font-size: 18px;
}

.benefits-image {
    border-radius: 8px;
    overflow: hidden;
}

.benefits-image img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.accordion-item {
    border: 1px solid #e9ecef;
    border-radius: 8px;
    margin-bottom: 15px;
    overflow: hidden;
}

.accordion-button {
    background: #fff;
    border: none;
    padding: 20px 25px;
    font-size: 16px;
    font-weight: 600;
    color: #333;
    text-align: left;
}

.accordion-button:not(.collapsed) {
    background: #007bff;
    color: #fff;
}

.accordion-body {
    padding: 20px 25px;
    background: #f8f9fa;
}

.service-cta .cta-wrapper {
    background: linear-gradient(135deg, #007bff, #0056b3);
    padding: 50px 40px;
    border-radius: 12px;
    text-align: center;
    color: #fff;
}

.cta-wrapper h3 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 15px;
}

.cta-wrapper p {
    font-size: 18px;
    margin-bottom: 30px;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.service-sidebar .sidebar-widget {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.widget-title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #333;
}

.service-info-list {
    list-style: none;
    padding: 0;
}

.service-info-list li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #eee;
}

.service-info-list li:last-child {
    border-bottom: none;
}

.service-info-list strong {
    color: #333;
    font-weight: 600;
}

.service-info-list span {
    color: #666;
}

.service-rating {
    padding-top: 20px;
    border-top: 1px solid #eee;
    margin-top: 20px;
    text-align: center;
}

.rating-stars {
    margin-bottom: 10px;
}

.rating-stars i {
    color: #ddd;
    font-size: 18px;
    margin: 0 2px;
}

.rating-stars i.active {
    color: #ffc107;
}

.rating-text {
    color: #666;
    font-size: 14px;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 25px;
}

.contact-item .icon {
    width: 50px;
    height: 50px;
    background: #007bff;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.contact-item .content span {
    display: block;
    color: #666;
    font-size: 14px;
}

.contact-item .content a {
    color: #333;
    font-weight: 600;
    text-decoration: none;
}

.related-services-list {
    list-style: none;
    padding: 0;
}

.related-services-list li {
    margin-bottom: 20px;
}

.related-services-list a {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 0;
    border-bottom: 1px solid #eee;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
}

.related-services-list a:hover {
    color: #007bff;
    padding-left: 10px;
}

.service-thumb {
    width: 60px;
    height: 60px;
    border-radius: 8px;
    overflow: hidden;
}

.service-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.service-info h5 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
}

.service-price {
    color: #007bff;
    font-weight: 600;
    font-size: 14px;
}

.download-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
    margin-bottom: 15px;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
}

.download-item:hover {
    background: #e9ecef;
    transform: translateX(5px);
}

.download-icon {
    width: 50px;
    height: 50px;
    background: #dc3545;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.download-content h5 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
}

.download-content span {
    color: #666;
    font-size: 14px;
}

.related-projects-section {
    background: #fff;
}

.project-item {
    margin-bottom: 30px;
}

.project-img {
    position: relative;
    height: 250px;
    border-radius: 8px;
    overflow: hidden;
}

.project-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.project-overlay {
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

.project-item:hover .project-overlay {
    opacity: 1;
}

.project-item:hover .project-img img {
    transform: scale(1.1);
}

.overlay-content h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}

.overlay-content p {
    margin-bottom: 20px;
}

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

.project-link:hover {
    background: #fff;
    color: #007bff;
}

.project-content {
    padding: 25px 0;
}

.project-content h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}

.project-content h4 a {
    color: #333;
    text-decoration: none;
}

.project-content h4 a:hover {
    color: #007bff;
}

.project-category {
    color: #007bff;
    font-weight: 600;
}

@media (max-width: 768px) {
    .service-overview h2 {
        font-size: 28px;
    }
    
    .service-features h3,
    .service-process h3,
    .service-benefits h3,
    .service-faq h3 {
        font-size: 24px;
    }
    
    .feature-item,
    .process-step {
        flex-direction: column;
        text-align: center;
    }
    
    .step-content {
        padding-top: 20px;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .service-sidebar .sidebar-widget {
        padding: 20px;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Video modal functionality
    $('.service-video-btn').on('click', function() {
        var videoUrl = $(this).data('video-url');
        // Add video modal functionality here
        console.log('Play video:', videoUrl);
    });
});
</script>
@endpush