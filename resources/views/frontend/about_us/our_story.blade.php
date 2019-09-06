@extends('frontend.layout')

@section('content')

<body class="skin-black fixed about-us">
    <!-- fixed page-->
    <section class=" dark full-height dark transparent" style="">
        <div class="owl-carousel owl-theme" id="bgslider">
            <div class="item" style="background:url('{{ asset('images/home-slid1.jpg') }}')"></div>
            <div class="item" style="background:url('{{ asset('images/home-slid2.jpg') }}') "></div>
        </div>
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
                            <div class="selected">Our Story</div>
                            <ul class="side-nav style-2 p-0">
                                @foreach ($nav_links as $nav_link) 
                                    <li class="{{ (url()->current() == url($nav_link->section_path)) ? 'active' : '' }}"><a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name) }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- end left links -->
                    <!-- right content -->
                    <div class="col-lg-9 col-12 justify-content-center align-self-center ">
                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-sm-12 p-lg-0">
                                <div class="story-slider">
                                    <div class="np np-mobile">
                                        <a href="#" class="next"><i class="fas fa-chevron-left"></i></a>
                                        <a href="#" class="prev"><i class="fas fa-chevron-right"></i></a>
                                    </div>
                                    <div class="owl-carousel owl-theme" id="our-story">
                                        @foreach($aboutus_contents as $aboutus_content)
                                            <div class="item">
                                                <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $aboutus_content->content_image) }}" />
                                                <div class="story">
                                                    <h4 class="lato-light font-38">{{ $aboutus_content->content_heading }}</h4>
                                                    <p class="font-16">{!! $aboutus_content->content_description !!}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 justify-content-center align-self-center">
                                <ul class="smart-icons text-right p-0">
                                    @include('includes.actionbar-links')
                                </ul>
                            </div>
                            <div class="np">
                                <a href="#" class="prev"><i class="fas fa-chevron-left"></i></a>
                                <a href="#" class="next"><i class="fas fa-chevron-right"></i></a>
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
    @section('title','Almawashi | About Us | Our Story') 