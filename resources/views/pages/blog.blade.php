@extends('layouts.app')

@section('title', 'Blog - Social Media Marketing Insights')
@section('meta_description', 'Read our latest insights, tips, and trends in social media marketing.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Blog</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">insights & trends</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Latest from our <span>blog</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Stay updated with the latest trends, insights, and best practices in social media marketing.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="{{ 0.25 * ($loop->index % 3) }}s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/images/' . $post['image']) }}" alt="{{ $post['title'] }}">
                            </figure>

                            <!-- Post Date Start -->
                            <div class="post-date">
                                <span>{{ \Carbon\Carbon::parse($post['date'])->format('d M') }}</span>
                            </div>
                            <!-- Post Date End -->
                        </div>
                        <!-- Post Featured Image End -->

                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('blog.single', $post['id']) }}">{{ $post['title'] }}</a></h2>
                                <p>{{ $post['excerpt'] }}</p>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Footer Start -->
                            <div class="post-item-footer">
                                <ul>
                                    <li><i class="fa-regular fa-user"></i> By {{ $post['author'] }}</li>
                                    <li><i class="fa-regular fa-clock"></i> {{ $post['reading_time'] }}</li>
                                    <li><i class="fa-regular fa-folder"></i> {{ $post['category'] }}</li>
                                </ul>
                            </div>
                            <!-- Blog Item Footer End -->

                            <!-- Blog Item Button Start -->
                            <div class="post-item-btn">
                                <a href="{{ route('blog.single', $post['id']) }}" class="btn-default">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>
                @endforeach
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