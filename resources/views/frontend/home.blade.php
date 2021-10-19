@extends('frontend.layouts.master')

@section('title')
    Dental Federation
@endsection

@section('content')
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{asset('asset/frontend/images/main-slider/slide1.jpg')}});">
                <div class="auto-container">
                    <div class="content-box">
                        <center><img src="{{asset('asset/frontend/images/catlogo.png')}}" style="max-width:250px;"></center>
                        <h2>Dentist Elearning<br>Prime Performance</h2>
                        <div class="btn-box"><a href="register" class="theme-btn btn-style-two"><span class="btn-title">Join for free</span></a></div>
                    </div>  
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{asset('asset/frontend/images/main-slider/slide2.jpg')}});">
                <div class="auto-container">
                    <div class="content-box">
                        <center><img src="{{asset('asset/frontend/images/catlogo.png')}}" style="max-width:250px;"></center>
                        <h2>Dentist Elearning<br>Prime Performance</h2>
                        <div class="btn-box"><a href="register" class="theme-btn btn-style-two"><span class="btn-title">Join for free</span></a></div>
                    </div>  
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{asset('asset/frontend/images/main-slider/slide3.jpg')}});">
                <div class="auto-container">
                    <div class="content-box">
                        <center><img src="{{asset('asset/frontend/images/catlogo.png')}}" style="max-width:250px;"></center>
                        <h2>Dentist Elearning<br>Prime Performance</h2>
                        <div class="btn-box"><a href="register" class="theme-btn btn-style-two"><span class="btn-title">Join for free</span></a></div>
                    </div>  
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{asset('asset/frontend/images/main-slider/slide4.jpg')}});">
                <div class="auto-container">
                    <div class="content-box">
                        <center><img src="{{asset('asset/frontend/images/catlogo.png')}}" style="max-width:250px;"></center>
                        <h2>Dentist Elearning<br>Prime Performance</h2>
                        <div class="btn-box"><a href="register" class="theme-btn btn-style-two"><span class="btn-title">Join for free</span></a></div>
                    </div>  
                </div>
            </div>

        </div>
    </section>
    <!--End Banner Section -->

    <!-- Coming Soon -->
    <section class="coming-soon-section">
        <div class="auto-container">
            <div class="outer-box">
                <h2>Join now and get your first lecture for free</h2>
            </div>
        </div>
    </section>
    <!-- End Coming Soon -->

    <!-- About Section -->
    <section id="teacher" class="about-section">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Our Doctors</span>
                            <h2>The future relies on you<br>You can rely on us</h2>
                        </div>
                        <ul class="list-style-one">
                            <li>Multiple Announcements during the course.</li>
                            <li>Logo & company details on the WordCamp.</li>
                            <li>Dedicated blog post thanking each Gold.</li>
                            <li>Acknowledgment and opening and closing.</li>
                        </ul>
                        <div class="btn-box"><a href="register" class="theme-btn btn-style-three"><span class="btn-title">Register Now</span></a></div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image wow fadeIn"><img src="{{asset('asset/frontend/images/resource/about-img-1.jpg')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Features Section Two -->
    <section class="features-section-two">
        <div class="auto-container">
            <div class="anim-icons">   
                <span class="icon twist-line-1 wow zoomIn"></span>
                <span class="icon twist-line-2 wow zoomIn" data-wow-delay="1s"></span>
                <span class="icon twist-line-3 wow zoomIn" data-wow-delay="2s"></span>
            </div>

            <div class="row">
                <!-- Title Block -->
                <div class="title-block col-lg-4 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="sec-title">
                            <span class="title">Why Dental Federation?</span>
                            <h2>Our Features</h2>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-classroom"></span></div>
                        <h4><a href="about">Real Interaction</a></h4>
                        <div class="text">Demo content demo content demo content demo content demo content.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-handshake"></span></div>
                        <h4><a href="about">Easy & Fast</a></h4>
                        <div class="text">Demo content demo content demo content demo content demo content.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-smartphone-1"></span></div>
                        <h4><a href="about">Simple Requirements</a></h4>
                        <div class="text">Demo content demo content demo content demo content demo content.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-board"></span></div>
                        <h4><a href="about">Great Content</a></h4>
                        <div class="text">Demo content demo content demo content demo content demo content.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-solution"></span></div>
                        <h4><a href="about">Affordable Cost</a></h4>
                        <div class="text">Demo content demo content demo content demo content demo content.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Section -->

    <!-- Fun Fact Section -->
    <section class="fun-fact-section">
        <div class="auto-container">

            <div class="sec-title text-center">
                <span class="title">Since march 2021 we served</span>
            </div>

            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <span class="icon flaticon-bank"></span>
                            <span class="count-text" data-speed="3000" data-stop="20">0</span>
                            <h4 class="counter-title">Institution</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <span class="icon flaticon-employee-1"></span>
                            <span class="count-text" data-speed="3000" data-stop="200">0</span>
                            <h4 class="counter-title">Instructors</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <span class="icon flaticon-employee"></span>
                            <span class="count-text" data-speed="3000" data-stop="3000">0</span>
                            <h4 class="counter-title">Doctors</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <span class="icon flaticon-classroom"></span>
                            <span class="count-text" data-speed="3000" data-stop="15000">0</span>
                            <h4 class="counter-title">Content Hours</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- schedule Section -->
    <!--<section class="schedule-section">-->
    <!--    <div class="anim-icons">-->
    <!--        <span class="icon icon-circle-4 wow zoomIn"></span>-->
    <!--        <span class="icon icon-circle-3 wow zoomIn"></span>-->
    <!--    </div>-->

    <!--    <div class="auto-container">-->
    <!--        <div class="sec-title text-center">-->
    <!--            <span class="title">To join and start learning</span>-->
    <!--            <h2>Three simple steps</h2>-->
    <!--        </div>-->

    <!--        <div class="schedule-tabs tabs-box">-->
    <!--            <div class="btns-box">-->
                    <!--Tabs Box-->
    <!--                <ul class="tab-buttons clearfix">-->
    <!--                    <li class="tab-btn active-btn">-->
    <!--                        <span class="day">First Step</span>-->
    <!--                        <span class="month">Register a new account and login</span> -->
    <!--                    </li>-->

    <!--                    <li class="tab-btn active-btn">-->
    <!--                        <span class="day">Step Two</span>-->
    <!--                        <span class="month">Subscribe to a preferred plan</span>-->
    <!--                    </li>-->

    <!--                    <li class="tab-btn active-btn">-->
    <!--                        <span class="day">Step Three</span>-->
    <!--                        <span class="month">Go to the content and start learning</span>-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--            </div>-->

    <!--            <div class="tabs-content">-->

                    <!--Tab-->
    <!--                <div class="tab active-tab">-->
    <!--                    <div class="schedule-timeline">-->
                            <!-- schedule Block -->
    <!--                        <div class="schedule-block">-->
    <!--                            <div class="inner-box">-->
    <!--                                <div class="inner">-->
    <!--                                    <div class="date">1</div>-->
    <!--                                    <h4><a href="#">Step One</a></h4>-->
    <!--                                    <div class="text">Step one description will be here Step one description will be here Step one description will be here Step one description will be here Step one description will be here Step one description will be here Step one description will be here</div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->

                             <!-- schedule Block -->
    <!--                        <div class="schedule-block even">-->
    <!--                            <div class="inner-box">-->
    <!--                                <div class="inner">-->
    <!--                                    <div class="date">2</div>-->
    <!--                                    <h4><a href="#">Step Two</a></h4>-->
    <!--                                    <div class="text">Step two description will be here Step two description will be here Step two description will be here Step two description will be here Step two description will be here Step two description will be here Step two description will be here</div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->

                            <!-- schedule Block -->
    <!--                        <div class="schedule-block">-->
    <!--                            <div class="inner-box">-->
    <!--                                <div class="inner">-->
    <!--                                    <div class="date">3</div>-->
    <!--                                    <h4><a href="#">Step Three</a></h4>-->
    <!--                                    <div class="text">Step three description will be here Step three description will be here Step three description will be here Step three description will be here Step three description will be here Step three description will be here Step three description will be here</div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->

    <!--                    </div>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--End schedule Section -->

    <!-- Pricing Section -->
    <!--<section class="pricing-section">-->
    <!--    <div class="anim-icons">-->
    <!--        <span class="icon icon-circle-green wow fadeIn"></span>-->
    <!--        <span class="icon icon-circle-blue wow fadeIn"></span>-->
    <!--        <span class="icon icon-circle-pink wow fadeIn"></span>-->
    <!--    </div>-->

    <!--    <div class="auto-container">-->
    <!--        <div class="sec-title text-center">-->
    <!--            <span class="title">Pricing Table</span>-->
    <!--            <h2>Please choose your preferred package</h2>-->
    <!--        </div>-->

    <!--        <div class="outer-box">-->
    <!--            <div class="row">-->
                    <!-- Pricing Block -->
    <!--                <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">-->
    <!--                    <div class="inner-box">-->
    <!--                        <div class="icon-box">-->
    <!--                            <div class="icon-outer"><span class="icon flaticon-board"></span></div>-->
    <!--                        </div>-->
    <!--                        <div class="price-box">-->
    <!--                            <div class="title">Silver Package</div>-->
    <!--                            <h4 class="price">Free</h4>-->
    <!--                        </div>-->
    <!--                        <ul class="features">-->
    <!--                            <li class="true">Feature No. one here</li>-->
    <!--                            <li class="true">Feature No. two here</li>-->
    <!--                            <li class="false">Feature No. three here</li>-->
    <!--                            <li class="false">Feature No. four here</li>-->
    <!--                            <li class="false">Feature No. five here</li>-->
    <!--                        </ul>-->
    <!--                        <div class="btn-box">-->
    <!--                            <a href="#" class="theme-btn">Register Now</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- Pricing Block -->
    <!--                <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">-->
    <!--                    <div class="inner-box">-->
    <!--                        <div class="icon-box">-->
    <!--                            <div class="icon-outer"><span class="icon flaticon-classroom"></span></div>-->
    <!--                        </div>-->
    <!--                        <div class="price-box">-->
    <!--                            <div class="title">Bronze Package</div>-->
    <!--                            <h4 class="price">$5</h4>-->
    <!--                        </div>-->
    <!--                        <ul class="features">-->
    <!--                            <li class="true">Feature No. one here</li>-->
    <!--                            <li class="true">Feature No. two here</li>-->
    <!--                            <li class="true">Feature No. three here</li>-->
    <!--                            <li class="false">Feature No. four here</li>-->
    <!--                            <li class="false">Feature No. five here</li>-->
    <!--                        </ul>-->
    <!--                        <div class="btn-box">-->
    <!--                            <a href="#" class="theme-btn">Register Now</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- Pricing Block -->
    <!--                <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">-->
    <!--                    <div class="inner-box">-->
    <!--                        <div class="icon-box">-->
    <!--                            <div class="icon-outer"><span class="icon flaticon-employee-1"></span></div>-->
    <!--                        </div>-->
    <!--                        <div class="price-box">-->
    <!--                            <div class="title">Golden Package</div>-->
    <!--                            <h4 class="price">$9</h4>-->
    <!--                        </div>-->
    <!--                        <ul class="features">-->
    <!--                            <li class="true">Feature No. one here</li>-->
    <!--                            <li class="true">Feature No. two here</li>-->
    <!--                            <li class="true">Feature No. three here</li>-->
    <!--                            <li class="true">Feature No. four here</li>-->
    <!--                            <li class="false">Feature No. five here</li>-->
    <!--                        </ul>-->
    <!--                        <div class="btn-box">-->
    <!--                            <a href="#" class="theme-btn">Register Now</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- Pricing Block -->
    <!--                <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">-->
    <!--                    <div class="inner-box">-->
    <!--                        <div class="icon-box">-->
    <!--                            <div class="icon-outer"><span class="icon flaticon-bank"></span></div>-->
    <!--                        </div>-->
    <!--                        <div class="price-box">-->
    <!--                            <div class="title">Diamond Package</div>-->
    <!--                            <h4 class="price">$$$</h4>-->
    <!--                        </div>-->
    <!--                        <ul class="features">-->
    <!--                            <li class="true">Feature No. one here</li>-->
    <!--                            <li class="true">Feature No. two here</li>-->
    <!--                            <li class="true">Feature No. three here</li>-->
    <!--                            <li class="true">Feature No. four here</li>-->
    <!--                            <li class="true">Feature No. five here</li>-->
    <!--                        </ul>-->
    <!--                        <div class="btn-box">-->
    <!--                            <a href="#" class="theme-btn">Register Now</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--End Pricing Section -->

    <!-- Call to action -->
    <section class="call-to-action" style="background-image: url({{asset('asset/frontend/images/background/callcenter.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">Do you have any questions that need a clarification?</div>
                <h2>We are happy to serve you around the clock</h2>
                <div class="btn-box">
                    <a href="#registration" class="theme-btn btn-style-one"><span class="btn-title">Contact Us Now</span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call to action -->

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">JOIN OUR COMMUNITY</span>
                            <h2>Join Dental Federation</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip</div>
                        </div>
                        <ul class="list-style-one">
                            <li>High Quality Education</li>
                            <li>You can learn anything</li>
                            <li>We list your options by state</li>
                            <li>Expert-created content and resources</li>
                        </ul>
                        <div class="btn-box">
                            <a href="register" class="theme-btn btn-style-two"><span class="btn-title">Register Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('asset/frontend/images/background/3.jpg')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us -->

    <!--Clients Section-->
    <!--<section class="clients-section">-->
    <!--    <div class="anim-icons">-->
    <!--        <span class="icon icon-dots-3 wow zoomIn"></span>-->
    <!--        <span class="icon icon-circle-blue wow zoomIn"></span>-->
    <!--    </div>-->
    <!--    <div class="auto-container">-->
    <!--        <div class="sec-title">-->
    <!--            <span class="title">Clients</span>-->
    <!--            <h2>Offcial Sponsors</h2>-->
    <!--        </div>-->

    <!--        <div class="sponsors-outer">-->
    <!--            <h3>Platinum Sponsors</h3>-->
    <!--            <div class="row">-->
                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/1.png')}}" alt=""></a></figure>-->
    <!--                </div>-->

                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/2.png')}}" alt=""></a></figure>-->
    <!--                </div>-->

                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/3.png')}}" alt=""></a></figure>-->
    <!--                </div>-->

                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/4.png')}}" alt=""></a></figure>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="sponsors-outer">-->
    <!--            <h3>Gold Sponsors</h3>-->

    <!--            <div class="row">-->
                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/5.png')}}" alt=""></a></figure>-->
    <!--                </div>-->

                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/6.png')}}" alt=""></a></figure>-->
    <!--                </div>-->

                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/7.png')}}" alt=""></a></figure>-->
    <!--                </div>-->

                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/8.png')}}" alt=""></a></figure>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="sponsors-outer">-->
    <!--            <h3>Silver Sponsors</h3>-->

    <!--            <div class="row">-->
                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/9.png')}}" alt=""></a></figure>-->
    <!--                </div>-->

                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/10.png')}}" alt=""></a></figure>-->
    <!--                </div>-->

                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/11.png')}}" alt=""></a></figure>-->
    <!--                </div>-->

                    <!-- Client Block -->
    <!--                <div class="client-block col-lg-3 col-md-6 col-sm-12">-->
    <!--                    <figure class="image-box"><a href="#"><img src="{{asset('asset/frontend/images/clients/12.png')}}" alt=""></a></figure>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--End Clients Section-->

    <!-- Register Section -->
    <section id="registration" class="register-section">
        <div class="auto-container">
            <div class="anim-icons full-width">
                <span class="icon icon-circle-3 wow zoomIn"></span>
            </div>
            <div class="outer-box">
                <div class="row no-gutters">
                    <div class="title-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="sec-title light">
                                <div class="icon-box"><span class="icon flaticon-rocket-ship"></span></div>
                                <h2>REGISTER NOW</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et dolore magna.</div>
                            </div>
                        </div>
                    </div>
                    <!--Register Form-->
                    <div class="register-form col-lg-8 col-md-6 col-sm-12">
                        <div class="form-inner">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <span class="icon fa fa-user"></span>
                                    <input type="text" name="username" placeholder="Full name" required="">
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-envelope"></span>
                                    <input type="email" name="email" value="" placeholder="Email address" required>
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-phone"></span>
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-edit"></span>
                                    <textarea name="message" placeholder="Additional Message"></textarea>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="theme-btn btn-style-four"><span class="btn-title">Register Now</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Register Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="anim-icons">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon twist-line-1 wow zoomIn"></span>
            <span class="icon twist-line-2 wow zoomIn"></span>
            <span class="icon twist-line-3 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Keep yourself up to date</span>
                <h2>Medical News</h2>
            </div>

            <div class="row">

                <!-- News Block Three -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{asset('asset/frontend/images/resource/news-1.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><span class="far fa-eye"></span>2,354</li>
                                <li><span class="far fa-comments"></span>5</li>
                            </ul>    
                            <h4><a href="#">Saudi arabia announces the remote study plan for...</a></h4>
                            <div class="btn-box"><a href="#" class="read-more">Read more...</a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{asset('asset/frontend/images/resource/news-2.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><span class="far fa-eye"></span>2,354</li>
                                <li><span class="far fa-comments"></span>5</li>
                            </ul>    
                            <h4><a href="#">International Conference on Art Business</a></h4>
                            <div class="btn-box"><a href="#" class="read-more">Read more...</a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{asset('asset/frontend/images/resource/news-3.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><span class="far fa-eye"></span>2,354</li>
                                <li><span class="far fa-comments"></span>5</li>
                            </ul>    
                            <h4><a href="# ">International Conference on Art Business</a></h4>
                            <div class="btn-box"><a href="#" class="read-more">Read more...</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->
@endsection