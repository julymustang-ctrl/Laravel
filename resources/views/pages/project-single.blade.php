@extends('layouts.app')

@section('title', $project['title'] . ' - Project Details')
@section('meta_description', $project['description'])

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Project <span>Details</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('projects') }}">Projects</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($project['title'], 30) }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Project Single Section Start -->
    <div class="project-single">
        <div class="container">
            <!-- Project Header Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-single-header">
                        <div class="project-meta">
                            <ul>
                                <li><strong>Client:</strong> {{ $project['client'] }}</li>
                                <li><strong>Category:</strong> {{ $project['category'] }}</li>
                                <li><strong>Date:</strong> {{ \Carbon\Carbon::parse($project['date'])->format('M Y') }}</li>
                            </ul>
                        </div>
                        <h1 class="project-title">{{ $project['title'] }}</h1>
                        <p class="project-description">{{ $project['description'] }}</p>
                    </div>
                </div>
            </div>
            <!-- Project Header End -->

            <!-- Project Main Image Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-main-image">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/' . $project['image']) }}" alt="{{ $project['title'] }}">
                        </figure>
                    </div>
                </div>
            </div>
            <!-- Project Main Image End -->

            <!-- Project Content Start -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-content">
                        <!-- Challenge Section Start -->
                        <div class="project-section">
                            <h2>The Challenge</h2>
                            <p>{{ $project['challenge'] }}</p>
                        </div>
                        <!-- Challenge Section End -->

                        <!-- Solution Section Start -->
                        <div class="project-section">
                            <h2>Our Solution</h2>
                            <p>{{ $project['solution'] }}</p>
                            
                            <h3>Strategy Implementation</h3>
                            <ul class="project-list">
                                <li>Comprehensive market research and competitor analysis</li>
                                <li>Multi-platform content strategy development</li>
                                <li>Targeted advertising campaigns across social platforms</li>
                                <li>Influencer partnership and collaboration</li>
                                <li>Real-time monitoring and optimization</li>
                            </ul>
                        </div>
                        <!-- Solution Section End -->

                        <!-- Results Section Start -->
                        <div class="project-section">
                            <h2>Results Achieved</h2>
                            <div class="project-results">
                                @foreach($project['results'] as $result)
                                <div class="result-item">
                                    <div class="result-icon">
                                        <i class="fa-solid fa-chart-line"></i>
                                    </div>
                                    <div class="result-content">
                                        <h4>{{ $result }}</h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Results Section End -->

                        <!-- Gallery Section Start -->
                        <div class="project-section">
                            <h2>Project Gallery</h2>
                            <div class="project-gallery">
                                <div class="row">
                                    @foreach($project['gallery'] as $image)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="gallery-item">
                                            <figure class="image-anime">
                                                <img src="{{ asset('assets/images/' . $image) }}" alt="Gallery Image">
                                            </figure>
                                            <div class="gallery-overlay">
                                                <a href="{{ asset('assets/images/' . $image) }}" class="gallery-popup">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Section End -->
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="project-sidebar">
                        <!-- Project Info Widget Start -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Project Information</h3>
                            <ul class="project-info-list">
                                <li><strong>Client:</strong> {{ $project['client'] }}</li>
                                <li><strong>Category:</strong> {{ $project['category'] }}</li>
                                <li><strong>Date:</strong> {{ \Carbon\Carbon::parse($project['date'])->format('M d, Y') }}</li>
                                <li><strong>Duration:</strong> 6 months</li>
                                <li><strong>Team Size:</strong> 8 specialists</li>
                                <li><strong>Budget:</strong> $50,000+</li>
                            </ul>
                        </div>
                        <!-- Project Info Widget End -->

                        <!-- Services Used Widget Start -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Services Used</h3>
                            <div class="services-used">
                                <span class="service-tag">Social Media Strategy</span>
                                <span class="service-tag">Content Creation</span>
                                <span class="service-tag">Paid Advertising</span>
                                <span class="service-tag">Analytics & Reporting</span>
                                <span class="service-tag">Community Management</span>
                            </div>
                        </div>
                        <!-- Services Used Widget End -->

                        <!-- CTA Widget Start -->
                        <div class="sidebar-widget cta-widget">
                            <div class="cta-content">
                                <h3>Ready to Start Your Project?</h3>
                                <p>Let's discuss how we can help you achieve similar results.</p>
                                <a href="{{ route('contact') }}" class="btn-default">Get Started</a>
                            </div>
                        </div>
                        <!-- CTA Widget End -->

                        <!-- Share Widget Start -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Share This Project</h3>
                            <div class="project-share">
                                <a href="#" class="share-facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="share-twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" class="share-linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" class="share-pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <!-- Share Widget End -->
                    </div>
                    <!-- Project Sidebar End -->
                </div>
            </div>
            <!-- Project Content End -->

            <!-- Project Navigation Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-navigation">
                        <div class="project-nav-prev">
                            <a href="{{ route('projects.single', max(1, $project['id'] - 1)) }}">
                                <i class="fa-solid fa-arrow-left"></i>
                                <span>Previous Project</span>
                            </a>
                        </div>
                        <div class="project-nav-all">
                            <a href="{{ route('projects') }}" class="btn-default">All Projects</a>
                        </div>
                        <div class="project-nav-next">
                            <a href="{{ route('projects.single', $project['id'] + 1) }}">
                                <span>Next Project</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Navigation End -->
        </div>
    </div>
    <!-- Project Single Section End -->
@endsection