@extends('layouts.app')

@section('title', $post['title'] . ' - Blog')
@section('meta_description', $post['excerpt'] ?? 'Read our latest social media marketing insights.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Blog <span>Details</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($post['title'], 30) }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Single Section Start -->
    <div class="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Single Content Start -->
                    <div class="blog-single-content">
                        <!-- Blog Single Image Start -->
                        <div class="blog-single-image">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/images/' . $post['image']) }}" alt="{{ $post['title'] }}">
                            </figure>
                        </div>
                        <!-- Blog Single Image End -->

                        <!-- Blog Single Header Start -->
                        <div class="blog-single-header">
                            <div class="blog-single-meta">
                                <ul>
                                    <li><i class="fa-regular fa-calendar"></i> {{ \Carbon\Carbon::parse($post['date'])->format('M d, Y') }}</li>
                                    <li><i class="fa-regular fa-user"></i> By {{ $post['author'] }}</li>
                                    <li><i class="fa-regular fa-clock"></i> {{ $post['reading_time'] }}</li>
                                    <li><i class="fa-regular fa-folder"></i> {{ $post['category'] }}</li>
                                </ul>
                            </div>

                            <h1 class="blog-single-title">{{ $post['title'] }}</h1>
                        </div>
                        <!-- Blog Single Header End -->

                        <!-- Blog Single Body Start -->
                        <div class="blog-single-body">
                            <p>{{ $post['content'] }}</p>

                            <h3>Key Takeaways</h3>
                            <ul class="blog-list">
                                <li>Stay ahead of emerging social media trends</li>
                                <li>Focus on authentic, engaging content</li>
                                <li>Leverage video content for maximum impact</li>
                                <li>Use analytics to guide your strategy</li>
                                <li>Build genuine communities around your brand</li>
                            </ul>

                            <blockquote>
                                <p>"Social media is not just about broadcasting your message; it's about creating meaningful conversations and building lasting relationships with your audience."</p>
                                <cite>- Social Media Marketing Expert</cite>
                            </blockquote>

                            <p>The landscape of social media continues to evolve rapidly. Brands that adapt quickly and embrace new platforms, features, and trends will be the ones that thrive in the competitive digital environment.</p>

                            <!-- Blog Tags Start -->
                            <div class="blog-tags">
                                <h4>Tags:</h4>
                                <div class="tag-list">
                                    @foreach($post['tags'] as $tag)
                                    <a href="#" class="tag-item"># {{ $tag }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Blog Tags End -->

                            <!-- Blog Share Start -->
                            <div class="blog-share">
                                <h4>Share this post:</h4>
                                <div class="share-links">
                                    <a href="#" class="share-facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#" class="share-twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                    <a href="#" class="share-linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#" class="share-pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <!-- Blog Share End -->
                        </div>
                        <!-- Blog Single Body End -->

                        <!-- Author Bio Start -->
                        <div class="author-bio">
                            <div class="author-image">
                                <img src="{{ asset('assets/images/' . $post['author_image']) }}" alt="{{ $post['author'] }}">
                            </div>
                            <div class="author-content">
                                <h4>About {{ $post['author'] }}</h4>
                                <p>{{ $post['author_bio'] }}</p>
                                <div class="author-social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Author Bio End -->

                        <!-- Blog Navigation Start -->
                        <div class="blog-navigation">
                            <div class="blog-nav-prev">
                                <a href="{{ route('blog.single', max(1, $post['id'] - 1)) }}">
                                    <i class="fa-solid fa-arrow-left"></i>
                                    <span>Previous Post</span>
                                </a>
                            </div>
                            <div class="blog-nav-next">
                                <a href="{{ route('blog.single', $post['id'] + 1) }}">
                                    <span>Next Post</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Blog Navigation End -->
                    </div>
                    <!-- Blog Single Content End -->
                </div>

                <div class="col-lg-4">
                    <!-- Sidebar Start -->
                    <div class="sidebar">
                        <!-- Sidebar CTA Start -->
                        <div class="sidebar-cta">
                            <div class="sidebar-cta-image">
                                <img src="{{ asset('assets/images/sidebar-cta.svg') }}" alt="">
                            </div>
                            <div class="sidebar-cta-content">
                                <h3>Need Help with Your Social Media Strategy?</h3>
                                <p>Get in touch with our experts for a free consultation.</p>
                                <a href="{{ route('contact') }}" class="btn-default">Contact Us</a>
                            </div>
                        </div>
                        <!-- Sidebar CTA End -->

                        <!-- Recent Posts Start -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Recent Posts</h3>
                            <div class="recent-posts">
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <img src="{{ asset('assets/images/post-2.jpg') }}" alt="">
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="{{ route('blog.single', 2) }}">How to Create Engaging Visual Content</a></h4>
                                        <span class="post-date">Jan 10, 2024</span>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <img src="{{ asset('assets/images/post-3.jpg') }}" alt="">
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="{{ route('blog.single', 3) }}">Measuring Social Media ROI Effectively</a></h4>
                                        <span class="post-date">Jan 05, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Posts End -->

                        <!-- Categories Start -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="category-list">
                                <li><a href="#">Social Media Strategy <span>(8)</span></a></li>
                                <li><a href="#">Content Creation <span>(12)</span></a></li>
                                <li><a href="#">Analytics <span>(6)</span></a></li>
                                <li><a href="#">Trends <span>(10)</span></a></li>
                                <li><a href="#">Tips & Tricks <span>(15)</span></a></li>
                            </ul>
                        </div>
                        <!-- Categories End -->
                    </div>
                    <!-- Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Single Section End -->
@endsection