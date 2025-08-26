@extends('layouts.app')

@section('title', 'Frequently Asked Questions - FAQ')
@section('meta_description', 'Find answers to commonly asked questions about our social media marketing services, packages, and processes.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Frequently <span>asked</span> questions</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">frequently asked questions</li>
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

    <!-- Page Faqs Start -->
    <div class="page-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-1 order-2">
                    <!-- Page FAQs Category Start -->
                    <div class="page-faqs-catagery">
                        <!-- FAQs section start -->
                        <div class="our-faq-section page-faq-accordion" id="general_information">
                            <div class="section-title">
                                <h2 class="text-anime-style-2">General <span>information</span></h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            What types of projects do you specialize in?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            How do I start a project with your company?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            Do you offer a free, no obligation quotation?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            What services do you offer?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="our-faq-section page-faq-accordion" id="content_creation_FAQ">
                            <div class="section-title">
                                <h2 class="text-anime-style-2">Content <span>creation</span></h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion1">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            How do I start a project with your company?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading6">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                            What factors affect the project timeline?
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse show" aria-labelledby="heading6" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            What are the key milestones in a construction project?
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="our-faq-section page-faq-accordion" id="project_management_FAQ">
                            <div class="section-title">
                                <h2 class="text-anime-style-2">Project <span>management</span></h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion2">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading8">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            What happens if there are delays in the project?
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item  wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                            What materials are commonly used in sustainable construction?
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse show" aria-labelledby="heading9" data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->

                        <!-- FAQs section start -->
                        <div class="our-faq-section page-faq-accordion" id="pricing_payments_FAQ">
                            <div class="section-title">
                                <h2 class="text-anime-style-2">Pricing & <span>payments</span></h2>
                            </div>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion3">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            How do sustainable materials impact energy efficiency?
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            How can construction contribute to water conservation?
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse show" aria-labelledby="heading11" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading12">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                            What are the main phases of the construction process?
                                        </button>
                                    </h2>
                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading13">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                            What permits are required for construction?
                                        </button>
                                    </h2>
                                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <p>Our post-construction services gives you peace of mind knowing that we are still here for you even after.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->
                    </div>  
                    <!-- Page FAQs Category End -->                  
                </div>

                <div class="col-lg-4 order-lg-2 order-1">
                    <!-- FAQs Sidebar Start -->
                    <div class="faq-sidebar">
                        <!-- FAQs Category List Start -->
                        <div class="faq-catagery-list wow fadeInUp">
                            <ul>
                                <li><a href="#general_information">general information</a></li>
                                <li><a href="#content_creation_FAQ">content creation FAQ</a></li>
                                <li><a href="#project_management_FAQ">project management FAQ</a></li>
                                <li><a href="#pricing_payments_FAQ">pricing & payments FAQ</a></li>
                            </ul>
                        </div>
                        <!-- FAQs Category List End -->

                        <!-- Sidebar Cta Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-sidebar-cta.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- CTA Contact Content Start -->
                            <div class="cta-contact-content">
                                <h3>You have different questions?</h3>
                                <p>Our team will answer all your questions. we ensure a quick response.</p>
                            </div>
                            <!-- CTA Contact Content End -->

                            <!-- CTA Contact Button Start -->
                            <div class="cta-contact-btn">
                                <a href="tel:123456789"><img src="{{ asset('assets/images/icon-sidebar-cta-phone.svg') }}" alt=""> +123 456 789</a>
                            </div>
                            <!-- CTA Contact Button End -->
                        </div>
                        <!-- Sidebar Cta Box End -->
                    </div>
                    <!-- Service Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Faq End -->
@endsection