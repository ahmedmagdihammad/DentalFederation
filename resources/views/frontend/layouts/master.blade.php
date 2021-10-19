<!DOCTYPE html>
<html lang="en">
    <head>
        @include('frontend.layouts.heade')
    </head>
    <body>
        <!--Main pagewrapper-->
        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>
            <!-- Header span -->

            <!-- Main Header-->
            @include('frontend.layouts.header')
            <!--End Main Header -->

            <!-- Main Content -->
            @yield('content')
            <!-- End Content -->

            <!-- Main Footer -->
            @include('frontend.layouts.footer')
            <!-- End Footer -->

        </div>
        <!--End pagewrapper-->

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="search">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>
                    
                    <br>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="#">Medical</a></li>
                        <li><a href="#">Bussiness</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Digital</a></li>
                        <li><a href="#">Conferance</a></li>
                    </ul>
                
                </div>
                
            </div>
        </div>

        <!-- Main Foot -->
        @include('frontend.layouts.foot')
        <!-- End Foot -->
    </body>
</html>