@extends('frontend.layouts.master')

@section('title')
    Dental Federation | {{$pages}}
@endsection

@section('content')
    <!-- Banner Section -->
    <style>
        .owl-stage-outer .owl-height{
            height: 370px !important;
        }
    </style>
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <!-- <div class="slide-item" style="background-image: url({{asset('asset/frontend/images/main-slider/slide1.jpg')}});"> -->
            <div class="slide-item" style="background-image: url({{asset('asset/frontend/images/background/2.jpeg')}});padding: 201px 0 51px;">
                <div class="auto-container">
                    <div class="content-box">
                        <center>
                            <h2>About Us</h2>
                        </center>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <section class="why-choose-us">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <ul class="list-style-one">
                            <li>
                                The Royal Australian Dental Federation brings more than 40 years of global dental practices through in its founding members. The Royal Australian Dental Federation is aspired to advancing the dental profession by setting highest standards, providing independent accreditation and building a worldwide network of highly skilled dental professionals.
                            </li>
                            <br>
                            <li>
                                The Royal Australian Dental Federation aims to support its members as they prepare for the advancing their knowledge and skills in various dental activities through comprehensive study materials, documentations and workshops for both the Associate Membership and Final Practice Accreditation. Moreover, the Royal Australian Federation continues its support to its members through various online support from the Federation Senior Officers and peers interaction, aiming to offer stimulating level information on scientific basis relevant to best practice performance. 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('asset/frontend/images/about-us/1.png')}}" alt="" style="height:450px;"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('asset/frontend/images/about-us/2.png')}}" alt="" style="height:400px;"></figure>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <ul class="list-style-one">
                            <li>
                                The Federation also offers flexible program that enables dentists and dental surgeons to advance practice whilst at the same time gaining valuable hours of educational credits. 
                            </li>
                            <br>
                            <li>
                                Through its Regional Committees, the Federation is active in most centres throughout Australia, United Kingdom and Middle East region. There are many opportunities to become actively involved in the Federation at the Regional Committee level. Members and Fellows are encouraged to develop networking relationships for mutual educational opportunities, effective patient referral, and improved interdisciplinary relationships
                            </li>
                            <br>
                            <li>
                                The goal of the federation is to guide and support its members to achieve the highest standards in their dental practices via a flexible structure.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection