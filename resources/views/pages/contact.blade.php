@extends('layouts.app')

@section('title', 'Contact Us - Artistic Social Media Marketing Agency')
@section('meta_description', 'Get in touch with our social media marketing experts. We are here to help grow your brand.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>Us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Form Section Start -->
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <!-- Contact Form Box Start -->
                    <div class="contact-form-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Contact us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Let's start a <span>conversation</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Ready to elevate your social media presence? Get in touch with our team of experts.</p>
                        </div>
                        <!-- Section Title End -->

                        @if(session('success'))
                            <div class="alert alert-success wow fadeInUp">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Contact Form Start -->
                        <div class="contact-form-content">
                            <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" value="{{ old('name') }}" required>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone" value="{{ old('phone') }}">
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter Your Subject" value="{{ old('subject') }}" required>
                                            @error('subject')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" rows="5" placeholder="Enter Your Message" required>{{ old('message') }}</textarea>
                                            @error('message')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="btn-default">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Form Box End -->
                </div>

                <div class="col-lg-4 col-md-12">
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>phone</h3>
                                <p><a href="tel:+123456789">+123 456 789</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>email</h3>
                                <p><a href="mailto:info@domainname.com">info@domainname.com</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>address</h3>
                                <p>123 Creative Lane London, SW1A 1AA United Kingdom</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Section End -->
@endsection