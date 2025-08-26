<!-- Footer Start -->
<footer class="main-footer">
    <!-- Let's Work Together start -->
    <div class="footer-work-together">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-together-box">
                        <!-- Work Together Content Start -->
                        <div class="work-together-content">
                            <h3>Let's Collaborate</h3>
                            <h2>Let's Work Together</h2>
                        </div>
                        <!-- Work Together Content End -->

                        <!-- Work Together Btn Start -->
                        <div class="work-together-btn">
                            <a href="{{ route('contact') }}">
                                <img src="{{ asset('assets/images/arrow-dark.svg') }}" alt="">
                                <span>Get in Touch</span>
                            </a>
                        </div>
                        <!-- Work Together Btn End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Let's Work Together end -->

    <!-- Footer Main Start -->
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <!-- Footer Newsletter Box Start -->
                    <div class="footer-newsletter-box">
                        <!-- Footer Newsletter Title Start -->
                        <div class="section-title footer-newsletter-title">
                            <h2>Let's achieve social media <span>excellence</span></h2>
                        </div>
                        <!-- Footer Newsletter Title End -->

                        <!-- Newsletter Form start -->
                        <div class="newsletter-form">
                            <form id="newsletterForm" action="{{ route('newsletter.subscribe') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="mail" placeholder="Enter Your Email" required="">
                                    <button type="submit" class="newsletter-btn"><i class="fa-regular fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Newsletter Form end -->
                    </div>
                    <!-- Footer Newsletter Box End -->
                </div>

                <div class="col-lg-2 col-md-4">
                    <!-- Footer Links start -->
                    <div class="footer-links">
                        <h3>quick link</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links end -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- Footer Links start -->
                    <div class="footer-links">
                        <h3>services</h3>
                        <ul>
                            <li><a href="{{ route('services.single', 1) }}">strategy development</a></li>
                            <li><a href="{{ route('services.single', 2) }}">account management</a></li>
                            <li><a href="{{ route('services.single', 3) }}">analytics and reporting</a></li>
                            <li><a href="{{ route('services.single', 4) }}">research and optimization</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links end -->
                </div>

                <div class="col-lg-2 col-md-4">
                    <!-- Footer Contact Details Start -->
                    <div class="footer-links">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">help</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term's & Condition </a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Footer Contact Details End -->
                </div>

                <div class="col-lg-12">
                    <!-- About Footer Start -->
                    <div class="footer-cta-box">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ asset('assets/images/footer-logo.svg') }}" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Contact Box Start -->
                        <div class="footer-contact-box">
                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>
                                <div class="footer-contact-item-content">
                                    <h3><a href="tel:+123456789">+123 456 789</a></h3>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->

                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="footer-contact-item-content">
                                    <h3><a href="mailto:infodomain@gmail.com">infodomain@gmail.com</a></h3>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->
                        </div>
                        <!-- Footer Contact Box End -->
                    </div>
                    <!-- About Footer End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © {{ date('Y') }} All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>

                    <div class="col-lg-6 col-md-7">
                        <!-- Footer Social Links Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i>Facebook</a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i>Twitter</a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Links End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </div>
    <!-- Footer Main End -->
</footer>
<!-- Footer End -->