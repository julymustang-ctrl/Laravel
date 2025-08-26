@extends('layouts.app')

@section('title', $teamMember['name'] . ' - ' . $teamMember['position'])
@section('meta_description', $teamMember['bio'])

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Team <span>Member</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('team') }}">Team</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $teamMember['name'] }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Single Section Start -->
    <div class="team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Team Member Image Start -->
                    <div class="team-member-image">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/' . $teamMember['image']) }}" alt="{{ $teamMember['name'] }}">
                        </figure>
                    </div>
                    <!-- Team Member Image End -->

                    <!-- Team Member Info Start -->
                    <div class="team-member-info">
                        <div class="member-info-item">
                            <h5>Position:</h5>
                            <p>{{ $teamMember['position'] }}</p>
                        </div>
                        <div class="member-info-item">
                            <h5>Experience:</h5>
                            <p>{{ $teamMember['experience'] }}</p>
                        </div>
                        <div class="member-info-item">
                            <h5>Education:</h5>
                            <p>{{ $teamMember['education'] }}</p>
                        </div>
                        <div class="member-info-item">
                            <h5>Social Media:</h5>
                            <div class="member-social-links">
                                @foreach($teamMember['social'] as $platform => $url)
                                <a href="{{ $url }}"><i class="fa-brands fa-{{ $platform === 'twitter' ? 'x-twitter' : $platform }}"></i></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Team Member Info End -->
                </div>

                <div class="col-lg-7">
                    <!-- Team Member Content Start -->
                    <div class="team-member-content">
                        <!-- Member Header Start -->
                        <div class="member-header">
                            <h1 class="member-name">{{ $teamMember['name'] }}</h1>
                            <h3 class="member-position">{{ $teamMember['position'] }}</h3>
                        </div>
                        <!-- Member Header End -->

                        <!-- Member Bio Start -->
                        <div class="member-bio">
                            <h3>About {{ explode(' ', $teamMember['name'])[0] }}</h3>
                            <p>{{ $teamMember['bio'] }}</p>
                        </div>
                        <!-- Member Bio End -->

                        <!-- Member Expertise Start -->
                        <div class="member-expertise">
                            <h3>Areas of Expertise</h3>
                            <div class="expertise-grid">
                                @foreach($teamMember['expertise'] as $skill)
                                <div class="expertise-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>{{ $skill }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Member Expertise End -->

                        <!-- Member Achievements Start -->
                        <div class="member-achievements">
                            <h3>Key Achievements</h3>
                            <ul class="achievement-list">
                                @foreach($teamMember['achievements'] as $achievement)
                                <li>{{ $achievement }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Member Achievements End -->

                        <!-- Member Quote Start -->
                        <div class="member-quote">
                            <blockquote>
                                <p>"Success in social media marketing comes from understanding your audience and creating authentic connections that drive meaningful engagement."</p>
                                <cite>- {{ $teamMember['name'] }}</cite>
                            </blockquote>
                        </div>
                        <!-- Member Quote End -->
                    </div>
                    <!-- Team Member Content End -->
                </div>
            </div>

            <!-- Member Skills Chart Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="member-skills-section">
                        <h3>Professional Skills</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h4>Social Media Strategy</h4>
                                        <span class="skill-percentage">95%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-percentage="95"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h4>Content Creation</h4>
                                        <span class="skill-percentage">90%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-percentage="90"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h4>Analytics & Reporting</h4>
                                        <span class="skill-percentage">85%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-percentage="85"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h4>Team Leadership</h4>
                                        <span class="skill-percentage">92%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-percentage="92"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h4>Client Relations</h4>
                                        <span class="skill-percentage">88%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-percentage="88"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h4>Digital Marketing</h4>
                                        <span class="skill-percentage">87%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-percentage="87"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Member Skills Chart End -->

            <!-- Team Navigation Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-navigation">
                        <div class="team-nav-prev">
                            <a href="{{ route('team.single', max(1, $teamMember['id'] - 1)) }}">
                                <i class="fa-solid fa-arrow-left"></i>
                                <span>Previous Member</span>
                            </a>
                        </div>
                        <div class="team-nav-all">
                            <a href="{{ route('team') }}" class="btn-default">All Team Members</a>
                        </div>
                        <div class="team-nav-next">
                            <a href="{{ route('team.single', $teamMember['id'] + 1) }}">
                                <span>Next Member</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Navigation End -->

            <!-- Contact CTA Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-cta">
                        <h3>Want to work with {{ explode(' ', $teamMember['name'])[0] }}?</h3>
                        <p>Get in touch to discuss your project and how our team can help you achieve your goals.</p>
                        <a href="{{ route('contact') }}" class="btn-default">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- Contact CTA End -->
        </div>
    </div>
    <!-- Team Single Section End -->
@endsection

@push('scripts')
<script>
    // Animate skill bars on page load
    document.addEventListener('DOMContentLoaded', function() {
        const skillBars = document.querySelectorAll('.skill-progress');
        
        skillBars.forEach(bar => {
            const percentage = bar.getAttribute('data-percentage');
            setTimeout(() => {
                bar.style.width = percentage + '%';
            }, 500);
        });
    });
</script>
@endpush