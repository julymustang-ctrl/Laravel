@extends('layouts.app')

@section('title', 'Contact Us - Artistic Social Media Marketing Agency')
@section('meta_description', 'Get in touch with our social media marketing experts. We are here to help grow your brand.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">conatct us</li>
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

    <!-- Contact Information Section Start -->
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                            </div>                            
                            <div class="contact-info-contant">
                                <p>Email us today for expert social media marketing solutions.</p>
                                <h3><a href="#">info@domain.com</a></h3>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item active">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                            </div>                            
                            <div class="contact-info-contant">
                                <p>Contact us to elevate your brand and achieve online success.</p>
                                <h3><a href="tel:+123456789">+123 456 789</a></h3>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
                            </div>                            
                            <div class="contact-info-contant">
                                <p>Visit our office for personalized social media solutions.</p>
                                <h3>6985 SW1A 1AA UK</h3>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information Section End -->

    <!-- Contact Us Form Section Start -->
    <div class="contact-us-form">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Contact us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Get in <span>touch</span> with us</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Connect with our team for tailored social media marketing solutions that elevate your brand, engage your audience, and drive results.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        @if(session('success'))
                            <div class="alert alert-success wow fadeInUp">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form id="contactForm" action="{{ route('contact.store') }}" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                            @csrf
                            <div class="row">                                
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" value="{{ old('fname') }}" required>
                                    @error('fname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name" value="{{ old('lname') }}" required>
                                    @error('lname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your mobile no." value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Enter your e-mail" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write message..." required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default"><span>submit message</span></button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us Form Section End -->

    <!-- Google Map Section Start -->
    <div class="google-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->
@endsection