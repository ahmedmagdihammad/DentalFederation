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
            <div class="slide-item" style="background-image: url({{asset('asset/frontend/images/background/accreditation.png')}});padding: 201px 0 51px;">
                <div class="auto-container">
                    <div class="content-box">
                        <center>
                            <h2>Accreditation</h2>
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
                    <div class="inner-column" style="padding-top:0px">
                        <div class="sec-title">
                            <div class="text" style="margin-top:0px;">
                                This membership program is relevant to dental best practice. In which, members will gain access to the materials of Best Practice Accreditation. This membership program is only valid for the Federation’s associate members. This membership program requires passing a written examination along with passing onsite inspection by one of the Federation’s SDO (or equivalent), addressing all the audit requirements. This membership program must be completed within 12 month and is subject to annual renewal. A prestigious accreditation certificate is issued from the Federation to successful members.  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('asset/frontend/images/accreditation.png')}}" alt="" ></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection