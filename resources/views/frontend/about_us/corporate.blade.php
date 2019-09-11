@extends('frontend.layout')

@section('content')

<body class="skin-black  about-us " style="background: #000">
<!-- <body class="skin-light fixed black-heading about-us" style="background: #eaeaea"> -->
    
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
                    <div class="col-lg-3 col-12 justify-content-center align-self-center ">
                        <div class="ul-dropdown">
                            <div class="selected">Corprate</div>
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
                                @if($aboutus_contents->first() != null)
                                    <div class="content-area">
                                        <h2 class="lato-black text-uppercase color-theme mb-4">{{$aboutus_contents->first()->content_heading}}</h2>
                                        <p>{!! $aboutus_contents->first()->content_description !!}</p>

                                    </div>
                                @endif
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
    @section('title','Almawashi | About Us | Corporate') 