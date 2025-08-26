@extends('layouts.app')

@section('title', 'Video Gallery - Our Video Content')
@section('meta_description', 'Watch our collection of video content and marketing campaigns showcasing our creative work.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Video <span>gallery</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">video gallery</li>
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

    <!-- Page Video Gallery Start -->
    <div class="page-video-gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- video gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-cursor-text="Play">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/gallery-1.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- video gallery end -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- video gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.2s" data-cursor-text="Play">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/gallery-2.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- video gallery end -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- video gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.4s" data-cursor-text="Play">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/gallery-3.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- video gallery end -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- video gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.6s" data-cursor-text="Play">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/gallery-4.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- video gallery end -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- video gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.8s" data-cursor-text="Play">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/gallery-5.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- video gallery end -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- video gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="1s" data-cursor-text="Play">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/gallery-6.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- video gallery end -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- video gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="1.2s" data-cursor-text="Play">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/gallery-7.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- video gallery end -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- video gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="1.4s" data-cursor-text="Play">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/gallery-8.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- video gallery end -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- video gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="1.6s" data-cursor-text="Play">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/gallery-9.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- video gallery end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Video Gallery End -->
@endsection