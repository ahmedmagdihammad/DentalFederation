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
            <div class="slide-item" style="background-image: url({{asset('asset/frontend/images/main-slider/slide1.jpg')}});padding: 201px 0 51px;">
                <div class="auto-container">
                    <div class="content-box">
                        <center>
                            <h2>Strategic Services</h2>
                            <!-- <div class="logo"><img src="{{asset('asset/frontend/images/logo.png')}}" alt="" style="max-width:250px;"/></div> -->
                        </center>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->
@endsection