@extends('layouts.app')

@section('title', 'Our Projects - Portfolio')
@section('meta_description', 'Explore our successful social media marketing campaigns and case studies.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Projects</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">our projects</li>
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

    <!-- Page Project Start -->
    <div class="page-project">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
					<!-- Choose Our Project Nav start -->
					<div class="our-Project-nav wow fadeInUp" data-wow-delay="0.25s">
						<ul>
							<li><a href="#" class="active-btn" data-filter="*">all</a></li>
							<li><a href="#" data-filter=".branding">Branding & Identity</a></li>
							<li><a href="#" data-filter=".web">Web Design</a></li>
							<li><a href="#" data-filter=".digital">Digital Marketing</a></li>
							<li><a href="#" data-filter=".analytics">SEO & Analytics</a></li>
						</ul>
					</div>
					<!-- Choose Our Project Nav End -->
				</div>

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
					<div class="row project-item-boxes align-items-center">
						<div class="col-lg-4 col-md-6 project-item-box branding web analytics">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project-1.jpg') }}" alt="">
                                    </figure>

                                    <div class="project-tag">
                                        <a href="{{ route('projects.single', 'web-design-project') }}">web design</a>
                                    </div>   

                                    <div class="project-btn">
                                        <a href="{{ route('projects.single', 'web-design-project') }}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>                                                           
                                
                                <div class="project-content">
                                    <h3>Dynamic E-commerce Platform</h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box web digital urban">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project-2.jpg') }}" alt="">
                                    </figure>

                                    <div class="project-tag">
                                        <a href="{{ route('projects.single', 'digital-marketing-project') }}">digital marketing</a>
                                    </div>   

                                    <div class="project-btn">
                                        <a href="{{ route('projects.single', 'digital-marketing-project') }}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>                                                           
                                
                                <div class="project-content">
                                    <h3>innovative identity design</h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box digital branding analytics">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project-3.jpg') }}" alt="">
                                    </figure>

                                    <div class="project-tag">
                                        <a href="{{ route('projects.single', 'seo-analytics-project') }}">SEO & analytics</a>
                                    </div>   

                                    <div class="project-btn">
                                        <a href="{{ route('projects.single', 'seo-analytics-project') }}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>                                                           
                                
                                <div class="project-content">
                                    <h3>dynamic digital campaign</h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box branding analytics">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project-4.jpg') }}" alt="">
                                    </figure>

                                    <div class="project-tag">
                                        <a href="{{ route('projects.single', 'branding-identity-project') }}">branding & identity</a>
                                    </div>   

                                    <div class="project-btn">
                                        <a href="{{ route('projects.single', 'branding-identity-project') }}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>                                                           
                                
                                <div class="project-content">
                                    <h3>impactful content creation</h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box web service branding">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project-5.jpg') }}" alt="">
                                    </figure>

                                    <div class="project-tag">
                                        <a href="{{ route('projects.single', 'web-design-project-2') }}">web design</a>
                                    </div>   

                                    <div class="project-btn">
                                        <a href="{{ route('projects.single', 'web-design-project-2') }}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>                                                           
                                
                                <div class="project-content">
                                    <h3>visionary growth strategy</h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box digital">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project-6.jpg') }}" alt="">
                                    </figure>

                                    <div class="project-tag">
                                        <a href="{{ route('projects.single', 'branding-identity-project-2') }}">branding & identity</a>
                                    </div>   

                                    <div class="project-btn">
                                        <a href="{{ route('projects.single', 'branding-identity-project-2') }}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>                                                           
                                
                                <div class="project-content">
                                    <h3>interactive website redesign</h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box branding web analytics">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project-7.jpg') }}" alt="">
                                    </figure>

                                    <div class="project-tag">
                                        <a href="{{ route('projects.single', 'web-design-project-3') }}">web design</a>
                                    </div>   

                                    <div class="project-btn">
                                        <a href="{{ route('projects.single', 'web-design-project-3') }}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>                                                           
                                
                                <div class="project-content">
                                    <h3>digital solutions platform</h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box web digital urban">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project-8.jpg') }}" alt="">
                                    </figure>

                                    <div class="project-tag">
                                        <a href="{{ route('projects.single', 'digital-marketing-project-2') }}">digital marketing</a>
                                    </div>   

                                    <div class="project-btn">
                                        <a href="{{ route('projects.single', 'digital-marketing-project-2') }}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>                                                           
                                
                                <div class="project-content">
                                    <h3>smart process optimization</h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6 project-item-box digital analytics">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/project-9.jpg') }}" alt="">
                                    </figure>

                                    <div class="project-tag">
                                        <a href="{{ route('projects.single', 'seo-analytics-project-2') }}">SEO & analytics</a>
                                    </div>   

                                    <div class="project-btn">
                                        <a href="{{ route('projects.single', 'seo-analytics-project-2') }}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                                    </div>
                                </div>                                                           
                                
                                <div class="project-content">
                                    <h3>future leaders program</h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Project End -->
@endsection