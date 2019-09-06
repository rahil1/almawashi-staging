@extends('frontend.layout')

@section('content')

<body class="skin-light fixed our-quality" style="background: #eaeaea">
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
        <div id="main-content" class="" style=";">
            <div class="container-fluid h-100">
                <!-- row top -->
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-lg-3 col-12 ">
                        <div class="ul-dropdown">
                            <div class="selected">Safety</div>
                            <ul class="side-nav style-2 p-0">
                                @foreach ($nav_links as $nav_link) 
                                    <li class="{{ (url()->current() == url($nav_link->section_path)) ? 'active' : '' }}">
                                        <a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <ul class="smart-icons text-left style-2 p-0">
                            @include('includes.actionbar-links')
                        </ul>
                    </div>
                    <!-- end left links -->
                    <!-- right content -->
                    <div class="col-lg-9 col-12">
                        <div class="content-area">
                            <h2 class="lato-black text-uppercase color-dark mb-4">Safety</h2>
                            <div class="row">
                            @if($quality_standards->first() != null)
                                <div class="col-md-5 col-sm-12 order-2 order-mb-1">
                                    <div class="content">
                                        <p>{!! $quality_standards->first()->standard_description !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 order-1 order-mb-2">
                                    <div class="image-box">
                                        <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $quality_standards->first()->standard_image) }}" class="img-full" />
                                    </div>
                                    <div class="quote short">
                                        {{ $quality_standards->first()->standard_title }}
                                    </div>
                                </div>
                            @endif
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
    @section('title','Almawashi | Quality | Safety')