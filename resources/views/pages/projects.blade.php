@extends('layouts.app')

@section('title', 'Our Projects - Portfolio')
@section('meta_description', 'Explore our successful social media marketing campaigns and case studies.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Projects</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Projects</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Projects Section Start -->
    <div class="our-projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">portfolio</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our successful <span>campaigns</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Discover how we've helped brands achieve remarkable results through strategic social media marketing.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <!-- Filter Buttons Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-filter-btn">
                        <button class="filter-btn active" data-filter="*">All Projects</button>
                        <button class="filter-btn" data-filter=".social-media">Social Media</button>
                        <button class="filter-btn" data-filter=".digital-marketing">Digital Marketing</button>
                        <button class="filter-btn" data-filter=".engagement">Engagement</button>
                        <button class="filter-btn" data-filter=".content-creation">Content Creation</button>
                    </div>
                </div>
            </div>
            <!-- Filter Buttons End -->

            <!-- Projects Grid Start -->
            <div class="row project-grid">
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 project-item {{ Str::slug($project['category']) }}">
                    <!-- Project Item Start -->
                    <div class="project-box wow fadeInUp" data-wow-delay="{{ 0.25 * ($loop->index % 3) }}s">
                        <!-- Project Image Start -->
                        <div class="project-image">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/images/' . $project['image']) }}" alt="{{ $project['title'] }}">
                            </figure>

                            <!-- Project Overlay Start -->
                            <div class="project-overlay">
                                <div class="project-content">
                                    <h3><a href="{{ route('projects.single', $project['id']) }}">{{ $project['title'] }}</a></h3>
                                    <p>{{ $project['category'] }}</p>
                                    <div class="project-btn">
                                        <a href="{{ route('projects.single', $project['id']) }}" class="btn-default">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Project Overlay End -->
                        </div>
                        <!-- Project Image End -->

                        <!-- Project Info Start -->
                        <div class="project-info">
                            <div class="project-category">{{ $project['category'] }}</div>
                            <h3><a href="{{ route('projects.single', $project['id']) }}">{{ $project['title'] }}</a></h3>
                            <p>{{ $project['description'] }}</p>
                        </div>
                        <!-- Project Info End -->
                    </div>
                    <!-- Project Item End -->
                </div>
                @endforeach
            </div>
            <!-- Projects Grid End -->

            <!-- Load More Button Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="load-more-btn">
                        <button class="btn-default">Load More Projects</button>
                    </div>
                </div>
            </div>
            <!-- Load More Button End -->
        </div>
    </div>
    <!-- Projects Section End -->

    <!-- Stats Section Start -->
    <div class="project-stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp">
                        <div class="stat-number">
                            <h2><span class="counter">150</span>+</h2>
                        </div>
                        <div class="stat-content">
                            <p>Completed Projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="stat-number">
                            <h2><span class="counter">2500</span>+</h2>
                        </div>
                        <div class="stat-content">
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="stat-number">
                            <h2><span class="counter">300</span>%</h2>
                        </div>
                        <div class="stat-content">
                            <p>Average Growth</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="stat-number">
                            <h2><span class="counter">25</span>+</h2>
                        </div>
                        <div class="stat-content">
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Stats Section End -->
@endsection

@push('scripts')
<script>
    // Project Filter Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectItems = document.querySelectorAll('.project-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                projectItems.forEach(item => {
                    if (filter === '*' || item.classList.contains(filter.substring(1))) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush