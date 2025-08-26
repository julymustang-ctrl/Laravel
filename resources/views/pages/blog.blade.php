@extends('layouts.app')

@section('title', 'Blog - Social Media Marketing Insights')
@section('meta_description', 'Read our latest insights, tips, and trends in social media marketing.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Blog</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">our blog</li>
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

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.single', 'craft-engaging-content-instagram') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/post-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="blog-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.single', 'craft-engaging-content-instagram') }}">How to Craft Engaging Content for Instagram</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="blog-item-btn">
                                <a href="{{ route('blog.single', 'craft-engaging-content-instagram') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.single', 'social-media-myths-ignore') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/post-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="blog-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.single', 'social-media-myths-ignore') }}">Social Media Myths You Need to Ignore</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="blog-item-btn">
                                <a href="{{ route('blog.single', 'social-media-myths-ignore') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.single', 'effective-hashtag-strategies') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/post-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="blog-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.single', 'effective-hashtag-strategies') }}">Effective Hashtag Strategies to Increase Reach</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="blog-item-btn">
                                <a href="{{ route('blog.single', 'effective-hashtag-strategies') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.single', 'choose-right-social-media-platforms') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/post-4.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="blog-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.single', 'choose-right-social-media-platforms') }}">How to Choose the Right Social Media Platforms for Your Brand</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="blog-item-btn">
                                <a href="{{ route('blog.single', 'choose-right-social-media-platforms') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.single', 'navigating-digital-landscape-small-business') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/post-5.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="blog-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.single', 'navigating-digital-landscape-small-business') }}">Navigating the Digital Landscape Tips for Small Businesses</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="blog-item-btn">
                                <a href="{{ route('blog.single', 'navigating-digital-landscape-small-business') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blog.single', 'social-media-influencer-marketing') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/post-6.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="blog-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="{{ route('blog.single', 'social-media-influencer-marketing') }}">Building Your Brand Through Social Media & Influencer Marketing</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="blog-item-btn">
                                <a href="{{ route('blog.single', 'social-media-influencer-marketing') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>

            <!-- Pagination Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-wrap">
                        <nav class="pagination">
                            <ul>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next <i class="fa-solid fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Pagination End -->
        </div>
    </div>
    <!-- Blog Section End -->
@endsection