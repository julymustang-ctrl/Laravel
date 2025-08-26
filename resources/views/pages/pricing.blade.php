@extends('layouts.app')

@section('title', 'Pricing Plans - Social Media Marketing Packages')
@section('meta_description', 'Choose the perfect social media marketing package for your business. Affordable pricing with exceptional results.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Pricing <span>Plans</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Pricing Section Start -->
    <div class="our-pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">pricing plans</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Choose the perfect <span>package</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Select from our flexible pricing options designed to fit businesses of all sizes.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <!-- Pricing Toggle Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-toggle">
                        <span class="toggle-label">Monthly</span>
                        <label class="switch">
                            <input type="checkbox" id="pricingToggle">
                            <span class="slider round"></span>
                        </label>
                        <span class="toggle-label">Yearly <small>(Save 20%)</small></span>
                    </div>
                </div>
            </div>
            <!-- Pricing Toggle End -->

            <div class="row">
                @foreach($pricingPlans as $plan)
                <div class="col-lg-6 col-md-6">
                    <!-- Pricing Item Start -->
                    <div class="pricing-item {{ $loop->last ? 'featured' : '' }} wow fadeInUp" data-wow-delay="{{ 0.25 * $loop->index }}s">
                        @if($loop->last)
                        <div class="popular-badge">Most Popular</div>
                        @endif

                        <!-- Pricing Header Start -->
                        <div class="pricing-header">
                            <div class="pricing-icon">
                                <img src="{{ asset('assets/images/icon-pricing-' . $plan['id'] . '.svg') }}" alt="{{ $plan['name'] }}">
                            </div>
                            <h3 class="pricing-title">{{ $plan['name'] }}</h3>
                            <div class="pricing-price">
                                <h2>$<span class="price-amount" data-monthly="{{ $plan['price'] }}" data-yearly="{{ $plan['price'] * 10 }}">${{ $plan['price'] }}</span></h2>
                                <p class="price-period">per month</p>
                            </div>
                            <p class="pricing-description">{{ $plan['description'] }}</p>
                        </div>
                        <!-- Pricing Header End -->

                        <!-- Pricing Features Start -->
                        <div class="pricing-features">
                            <ul>
                                @foreach($plan['features'] as $feature)
                                <li><i class="fa-solid fa-check"></i> {{ $feature }}</li>
                                @endforeach
                                @if($loop->first)
                                <li class="unavailable"><i class="fa-solid fa-times"></i> Advanced Analytics</li>
                                <li class="unavailable"><i class="fa-solid fa-times"></i> 24/7 Priority Support</li>
                                @endif
                            </ul>
                        </div>
                        <!-- Pricing Features End -->

                        <!-- Pricing Button Start -->
                        <div class="pricing-button">
                            <a href="{{ route('contact') }}" class="btn-default {{ $loop->last ? 'btn-primary' : '' }}">Choose Plan</a>
                        </div>
                        <!-- Pricing Button End -->
                    </div>
                    <!-- Pricing Item End -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Pricing Section End -->

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