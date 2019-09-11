@extends('frontend.layout')

@section('content')

<body class="skin-black fixed about-us " style="background: #282828">
    <!-- fixed page-->
    <section class=" dark full-height dark transparent" style="">
        <!-- <div class="owl-carousel owl-theme" id="bgslider">
            <div class="item" style="background:url({{ url('assests/images/home-slid1.jpg') }}) ">
            </div>
            <div class="item" style="background:url({{ url('assests/images/home-slid2.jpg') }}) ">
            </div>
        </div> -->
        <!-- menu header-->
        @include('includes.top-nav')
        <!-- menu header-->
        <!--main content-->
        <div id="main-content" class="" style="">
            <div class="container-fluid h-100">
                <!-- row top -->
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-lg-3 col-12  justify-content-center align-self-center ">
                        <div class="ul-dropdown">
                            <div class="selected">Mission & Vission</div>
                            <ul class="side-nav style-2 p-0">
                                @foreach ($nav_links as $nav_link) 
                                    <li class="{{ (url()->current() == url($nav_link->section_path)) ? 'active' : '' }}"><a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name) }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- end left links -->
                    <!-- right content -->
                    <div class="col-lg-9 col-12 justify-content-center align-self-center">
                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-sm-12">
                            <div class="content-area">
                                    <h2 class="lato-black text-uppercase while mb-4">Vision & Mission</h2>
                                    <div class="row">
                                        <!-- quote -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3 order-2 order-md-1">
                                            <div class="content quote pr-lg-5">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>
                                        <!-- end quote -->
                                        <!-- image -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3 order-1 order-md-2">
                                            <div class="quote-image">
                                                <img src="{{ url ('images/mission-vission01.jpg') }}" class="img-full" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- end image -->
                                        <!-- image -->
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="quote-image">
                                                <img src="{{ url ('images/mission-vission02.jpg') }}" class="img-full" />
                                            </div>
                                        </div>
                                        <!-- end image -->
                                        <!-- quote -->
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>
                                        <!-- end quote -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 justify-content-center align-self-center">
                                <ul class="smart-icons text-right p-0">
                                    @include('includes.actionbar-links')
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- end righ content -->
                </div>
            </div>
            <!-- end row top -->
        </div>
        <!--end main content-->
    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | About Us | Mission & Vision') 