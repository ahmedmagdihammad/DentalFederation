@extends('frontend.layouts.master')

@section('title')
    Dental Federation | About Us
@endsection

@section('content')
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{asset('asset/frontend/images/main-slider/slide1.jpg')}});">
                <div class="auto-container">
                    <div class="content-box">
                        <center>
                            <div class="logo"><img src="{{asset('asset/frontend/images/logo.png')}}" alt="" style="max-width:250px;"/></div>
                        </center>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

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
                                <div class=""><img src="{{asset('asset/frontend/images/catlogo.png')}}" style="max-width:250px;"></div>
                                <br>
                                <h2>Contact Us</h2>
                                <br>
                                <div class="text pull-left">
                                   <i class="fa fa-mobile fa-fw"></i>
                                   +20123456789
                                </div>
                                <div class="text pull-left">
                                   <i class="fa fa-envelope fa-fw"></i>
                                   info@dentistelearning.com
                                </div>
                                <div class="text pull-left">
                                   <i class="fa fa-map-marker fa-fw"></i>
                                   1# Street name, City name<br>State name, Country name.
                                </div>
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
                                    <input type="text" name="topic" placeholder="Topic" required="">
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-edit"></span>
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="theme-btn btn-style-four"><span class="btn-title">Send</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Register Section -->
@endsection