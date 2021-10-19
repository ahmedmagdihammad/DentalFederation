<header class="main-header header-style-two alternate-two">

        <!-- Header Top Two -->
        <div class="header-top-two">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left clearfix">
                        <ul class="links clearfix">
                            <!--<li><a href="javascript:void(0)"><span class="icon fa fa-clock"></span>247 Customer Support</a></li>-->
                            <li><a href="tel:+20123456789"><span class="icon fa fa-phone"></span>Call Us : <span dir="ltr">+20123456789</span></a></li>
                            <li><a href="mailto:info@dentistelearning.com"><span class="icon fa fa-envelope"></span>info@dentistelearning.com</a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right clearfix">
                        <ul class="social-icons">
                            <li class="social-follow">Follow Us</li>
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->

        <div class="main-box">
            <div class="auto-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="{{route('/')}}"><img src="{{asset('asset/frontend/images/logo.png')}}" alt="" title=""></a></div>
                </div>
                
                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{route('/')}}">Homepage</a></li>
                                <li><a href="{{route('pages', 'strategic-services')}}">Strategic Services</a></li>
                                <li><a href="{{route('pages', 'sccredetation')}}">Accredetation</a></li>
                                <li><a href="{{route('pages', 'medical-news')}}">Medical News</a></li>
                                <li><a href="{{route('pages', 'about')}}">About Us</a></li>
                                <!--<li><a href="{{route('pages', 'contact')}}">Contact Us</a></li>-->
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer box -->
                    <div class="outer-box">
                        <!--Search Box-->
                        <!--<div class="search-box-outer">-->
                        <!--    <div class="search-box-btn"><span class="flaticon-search"></span></div>-->
                        <!--</div>-->

                        <!-- Button Box -->
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Members Area</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="index"><img src="{{asset('asset/frontend/images/logo.png')}}" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>