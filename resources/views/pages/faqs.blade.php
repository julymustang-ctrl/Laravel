@extends('layouts.app')

@section('title', 'Frequently Asked Questions - FAQ')
@section('meta_description', 'Find answers to commonly asked questions about our social media marketing services, packages, and processes.')

@section('content')
<!-- Page Title Start -->
<section class="page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                    <h2 class="page-title">Frequently Asked Questions</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Title End -->

<!-- FAQ Section Start -->
<section class="faq-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="section-title text-left mb-50">
                    <span class="sub-title">FAQs</span>
                    <h2>Frequently Asked Questions</h2>
                    <p>Here are the most common questions our clients ask about our social media marketing services.</p>
                </div>
                
                <div class="faq-wrapper">
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqs as $index => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button" 
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" 
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                    <span class="accordion-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    {{ $faq['question'] }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                                 aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>{{ $faq['answer'] }}</p>
                                    @if(isset($faq['additional_info']))
                                    <ul class="faq-list">
                                        @foreach($faq['additional_info'] as $info)
                                        <li><i class="fas fa-check"></i> {{ $info }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4">
                <div class="faq-sidebar">
                    <!-- Contact Widget -->
                    <div class="sidebar-widget contact-widget">
                        <h3 class="widget-title">Still Have Questions?</h3>
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
                        </div>
                        <a href="{{ route('contact') }}" class="main-btn btn-filled">Get In Touch</a>
                    </div>
                    
                    <!-- Popular Services -->
                    <div class="sidebar-widget services-widget">
                        <h3 class="widget-title">Popular Services</h3>
                        <ul class="services-list">
                            <li><a href="{{ route('services') }}"><i class="fas fa-arrow-right"></i> Social Media Marketing</a></li>
                            <li><a href="{{ route('services') }}"><i class="fas fa-arrow-right"></i> Content Creation</a></li>
                            <li><a href="{{ route('services') }}"><i class="fas fa-arrow-right"></i> Paid Advertising</a></li>
                            <li><a href="{{ route('services') }}"><i class="fas fa-arrow-right"></i> Influencer Marketing</a></li>
                            <li><a href="{{ route('services') }}"><i class="fas fa-arrow-right"></i> Analytics & Reporting</a></li>
                        </ul>
                    </div>
                    
                    <!-- CTA Widget -->
                    <div class="sidebar-widget cta-widget" style="background-image: url('{{ asset('assets/img/cta-bg.jpg') }}');">
                        <div class="cta-content">
                            <h3>Ready to Get Started?</h3>
                            <p>Let's discuss your social media marketing goals and create a strategy that works.</p>
                            <a href="{{ route('contact') }}" class="main-btn btn-white">Start Your Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section End -->

<!-- Newsletter Section Start -->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-wrapper">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter-content">
                        <h2>Get Latest Updates</h2>
                        <p>Subscribe to our newsletter for social media tips, industry insights, and exclusive offers.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter-form">
                        <form action="{{ route('newsletter.subscribe') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email address" required>
                                <button type="submit" class="main-btn btn-filled">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section End -->
@endsection

@push('styles')
<style>
.faq-section {
    background: #f8f9fa;
}

.accordion-item {
    border: 1px solid #e9ecef;
    margin-bottom: 20px;
    border-radius: 8px;
    overflow: hidden;
}

.accordion-button {
    background: #fff;
    border: none;
    padding: 25px 30px;
    font-size: 18px;
    font-weight: 600;
    color: #333;
    text-align: left;
    display: flex;
    align-items: center;
    gap: 15px;
}

.accordion-button:not(.collapsed) {
    background: #007bff;
    color: #fff;
}

.accordion-button::after {
    margin-left: auto;
}

.accordion-number {
    background: #007bff;
    color: #fff;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: 600;
}

.accordion-button:not(.collapsed) .accordion-number {
    background: #fff;
    color: #007bff;
}

.accordion-body {
    padding: 30px;
    background: #fff;
}

.faq-list {
    margin-top: 20px;
    padding-left: 0;
}

.faq-list li {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
    color: #666;
}

.faq-list i {
    color: #28a745;
    font-size: 14px;
}

.faq-sidebar .sidebar-widget {
    background: #fff;
    padding: 40px 30px;
    border-radius: 8px;
    margin-bottom: 30px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.widget-title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 30px;
    color: #333;
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
    margin-bottom: 5px;
}

.contact-item .content a {
    color: #333;
    font-weight: 600;
    text-decoration: none;
}

.services-list {
    padding-left: 0;
}

.services-list li {
    margin-bottom: 15px;
}

.services-list a {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #333;
    text-decoration: none;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    transition: all 0.3s ease;
}

.services-list a:hover {
    color: #007bff;
    padding-left: 10px;
}

.cta-widget {
    background-size: cover;
    background-position: center;
    position: relative;
    color: #fff;
}

.cta-widget::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,123,255,0.9);
    border-radius: 8px;
}

.cta-content {
    position: relative;
    z-index: 2;
    text-align: center;
}

.cta-content h3 {
    color: #fff;
    margin-bottom: 15px;
}

.cta-content p {
    color: rgba(255,255,255,0.9);
    margin-bottom: 25px;
}

.newsletter-section {
    background: linear-gradient(135deg, #007bff, #0056b3);
    padding: 80px 0;
}

.newsletter-wrapper {
    background: #fff;
    padding: 60px;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}

.newsletter-content h2 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #333;
}

.newsletter-content p {
    color: #666;
    font-size: 18px;
}

.newsletter-form .form-group {
    position: relative;
    display: flex;
    gap: 15px;
}

.newsletter-form input {
    flex: 1;
    padding: 20px 25px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
}

.newsletter-form button {
    padding: 20px 30px;
    white-space: nowrap;
}
</style>
@endpush