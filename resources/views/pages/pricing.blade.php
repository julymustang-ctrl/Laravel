@extends('layouts.app')

@section('title', 'Pricing Plans - Social Media Marketing Packages')
@section('meta_description', 'Choose the perfect social media marketing package for your business. Affordable pricing with exceptional results.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>pricing</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">our pricing</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker subpages-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="{{ asset('assets/images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-6.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-6.svg') }}" alt=""></span>
            </div>

            <div class="scrolling-content">
                <span><img src="{{ asset('assets/images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-6.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-5.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/client-logo-6.svg') }}" alt=""></span>
            </div>
        </div>
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- Page Pricing Start -->
    <div class="page-pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Box Start -->
                    <div class="pricing-item wow fadeInUp">
                        <!-- Pricing Header Start -->
                        <div class="pricing-header">
                            <img src="{{ asset('assets/images/icon-pricing-1.svg') }}" alt="">
                            <h3>simple plan</h3>
                            <p>Start at $29 included 3 client</p>
                            <h2><sup>$</sup>29<sub>/per month</sub></h2>
                        </div>
                        <!-- Pricing Header End -->

                        <!-- Pricing Box Body Start -->
                        <div class="pricing-body">
                            <a href="{{ route('contact') }}" class="btn-default btn-highlighted">Get started</a>
                        </div>
                        <!-- Pricing Box Body End -->

                        <!-- Pricing Button Start -->
                        <div class="pricing-footer">
                            <ul>
                                <li>24/7 customer support</li>
                                <li>Multi-platform integration</li>
                                <li>Free initial consultation</li>
                            </ul>
                        </div>
                        <!-- Pricing Button End -->
                    </div>
                    <!-- Pricing Box End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Box Start -->
                    <div class="pricing-item highlighted-box wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Pricing Header Start -->
                        <div class="pricing-header">
                            <img src="{{ asset('assets/images/icon-pricing-2.svg') }}" alt="">
                            <h3>Standard Plan</h3>
                            <p>Start at $39 included 3 client</p>
                            <h2><sup>$</sup>39<sub>/per month</sub></h2>
                        </div>
                        <!-- Pricing Header End -->

                        <!-- Pricing Box Body Start -->
                        <div class="pricing-body">
                            <a href="{{ route('contact') }}" class="btn-default btn-highlighted">Get started</a>
                        </div>
                        <!-- Pricing Box Body End -->

                        <!-- Pricing Button Start -->
                        <div class="pricing-footer">
                            <ul>
                                <li>24/7 customer support</li>
                                <li>Multi-platform integration</li>
                                <li>Free initial consultation</li>
                            </ul>
                        </div>
                        <!-- Pricing Button End -->
                    </div>
                    <!-- Pricing Box End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Box Start -->
                    <div class="pricing-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Pricing Header Start -->
                        <div class="pricing-header">
                            <img src="{{ asset('assets/images/icon-pricing-1.svg') }}" alt="">
                            <h3>premium plan</h3>
                            <p>Start at $49 included 3 client</p>
                            <h2><sup>$</sup>49<sub>/per month</sub></h2>
                        </div>
                        <!-- Pricing Header End -->

                        <!-- Pricing Box Body Start -->
                        <div class="pricing-body">
                            <a href="{{ route('contact') }}" class="btn-default btn-highlighted">Get started</a>
                        </div>
                        <!-- Pricing Box Body End -->

                        <!-- Pricing Button Start -->
                        <div class="pricing-footer">
                            <ul>
                                <li>24/7 customer support</li>
                                <li>Multi-platform integration</li>
                                <li>Free initial consultation</li>
                            </ul>
                        </div>
                        <!-- Pricing Button End -->
                    </div>
                    <!-- Pricing Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Pricing End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">What <span>clients</span> are saying</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('contact') }}" class="btn-default">contact us</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">	                                   
                                        <div class="testimonial-header">
                                            <div class="testimonial-content">
                                                <p>"Working with this team has a game-changer for our brand engagement skyrocketed, we've seen a noticeable increase in sales."</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-1.jpg') }}" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>arlene mcCoy</h3>
                                                    <p>Co Founder</p>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="testimonial-body">
                                            <div class="testimonial-counter">
                                                <h2><span class="counter">80</span>K</h2>
                                                <p>Instagram Followers</p>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">	                                   
                                        <div class="testimonial-header">
                                            <div class="testimonial-content">
                                                <p>"Working with this team has a game-changer for our brand engagement skyrocketed, we've seen a noticeable increase in sales."</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-2.jpg') }}" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>arlene mcCoy</h3>
                                                    <p>Co Founder</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="testimonial-counter">
                                                <h2><span class="counter">130</span>K</h2>
                                                <p>Instagram Followers</p>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">	                                   
                                        <div class="testimonial-header">
                                            <div class="testimonial-content">
                                                <p>"Working with this team has a game-changer for our brand engagement skyrocketed, we've seen a noticeable increase in sales."</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-3.jpg') }}" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>arlene mcCoy</h3>
                                                    <p>Co Founder</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="testimonial-counter">
                                                <h2><span class="counter">80</span>M</h2>
                                                <p>Instagram Followers</p>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-content">
                                                <p>"Working with this team has a game-changer for our brand engagement skyrocketed, we've seen a noticeable increase in sales."</p>
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-4.jpg') }}" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>arlene mcCoy</h3>
                                                    <p>Co Founder</p>
                                                </div>
                                            </div>
                                        </div>                               

                                        <div class="testimonial-body">
                                            <div class="testimonial-counter">
                                                <h2><span class="counter">200</span>M+</h2>
                                                <p>Social Followers</p>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->                                
                            </div>
                            <div class="testimonial-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div> 
    <!-- Our Testimonial Section End -->

    <!-- Our FAQs Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Our FAQs Content Start -->
                    <div class="our-faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">faqs</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Answers to your common <span>questions</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Find clear and concise answers to the most frequently asked questions about our social media marketing services.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQs Review Box Start -->
                        <div class="faqs-review-box">
                            <!-- Review Rating Box Start -->
                            <div class="review-rating-box">
                                <h2><span class="counter">4.9</span></h2>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <!-- Review Rating Box End -->
                            
                            <!-- Review Client Box Start -->
                            <div class="review-client-box">
                                <!-- Review Image Start -->
                                <div class="satisfy-client-images">
                                    <div class="satisfy-client-img">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/satisfy-client-img-1.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-img">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/satisfy-client-img-2.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-img">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/satisfy-client-img-3.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Testimonial Review Image End -->

                                <!-- Satisfy Client Box Start -->
                                <div class="satisfy-client-content wow fadeInUp">
                                    <p>Explore our trust score Customer Reviews</p>
                                </div>
                            </div>
                            <!-- Review Client Box End -->
                        </div>
                        <!-- FAQs Review Box End -->
                    </div>
                    <!-- Our FAQs Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="faqaccordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What is Social Media Marketing?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform's unique audience.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Which platforms do you specialize in?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We specialize in major platforms like Facebook, Instagram, Twitter, LinkedIn Pinterest, tailoring strategy to each platform's unique audience.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    How do you measure success?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We track engagement rates, follower growth, website traffic, conversion rates, and ROI to measure campaign success and optimize strategies.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Can I see results before committing?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, we offer a free consultation and initial strategy session to demonstrate our approach and potential results for your business.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our FAQs Section End -->
@endsection

    <!-- Pricing Features Comparison Start -->
    <div class="pricing-comparison">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">feature comparison</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Compare <span>plans</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="comparison-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Features</th>
                                    <th>Basic Plan</th>
                                    <th>Pro Plan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Social Media Platforms</td>
                                    <td>3 Platforms</td>
                                    <td>5 Platforms</td>
                                </tr>
                                <tr>
                                    <td>Monthly Posts</td>
                                    <td>30 Posts</td>
                                    <td>60 Posts</td>
                                </tr>
                                <tr>
                                    <td>Content Creation</td>
                                    <td><i class="fa-solid fa-check text-success"></i></td>
                                    <td><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Analytics & Reporting</td>
                                    <td>Basic</td>
                                    <td>Advanced</td>
                                </tr>
                                <tr>
                                    <td>Community Management</td>
                                    <td>Business Hours</td>
                                    <td>24/7</td>
                                </tr>
                                <tr>
                                    <td>Paid Advertising Management</td>
                                    <td><i class="fa-solid fa-times text-danger"></i></td>
                                    <td><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Monthly Strategy Calls</td>
                                    <td>1 Call</td>
                                    <td>2 Calls</td>
                                </tr>
                                <tr>
                                    <td>Support</td>
                                    <td>Email Support</td>
                                    <td>Priority Support</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Features Comparison End -->

    <!-- Pricing FAQ Start -->
    <div class="pricing-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">frequently asked</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Pricing <span>questions</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="accordion" id="pricingAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Can I change my plan anytime?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#pricingAccordion">
                                <div class="accordion-body">
                                    Yes, you can upgrade or downgrade your plan at any time. Changes will be reflected in your next billing cycle.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Is there a setup fee?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                                <div class="accordion-body">
                                    No, there are no setup fees. The price you see is all you pay to get started with your social media management.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Do you offer custom packages?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                                <div class="accordion-body">
                                    Absolutely! We can create custom packages tailored to your specific needs and budget. Contact us to discuss your requirements.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    What's included in the free trial?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                                <div class="accordion-body">
                                    Our 14-day free trial includes full access to your chosen plan with no restrictions. You can cancel anytime during the trial period.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing FAQ End -->

    <!-- Pricing CTA Start -->
    <div class="pricing-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Ready to get <span>started?</span></h2>
                        <p class="wow fadeInUp">Join hundreds of satisfied clients who trust us with their social media marketing.</p>
                        <div class="cta-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="{{ route('contact') }}" class="btn-default">Start Free Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing CTA End -->
@endsection

@push('scripts')
<script>
    // Pricing toggle functionality
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('pricingToggle');
        const priceAmounts = document.querySelectorAll('.price-amount');
        const pricePeriods = document.querySelectorAll('.price-period');

        toggle.addEventListener('change', function() {
            priceAmounts.forEach(amount => {
                const monthly = amount.getAttribute('data-monthly');
                const yearly = amount.getAttribute('data-yearly');
                
                if (this.checked) {
                    amount.textContent = '$' + yearly;
                } else {
                    amount.textContent = '$' + monthly;
                }
            });

            pricePeriods.forEach(period => {
                period.textContent = toggle.checked ? 'per year' : 'per month';
            });
        });
    });
</script>
@endpush