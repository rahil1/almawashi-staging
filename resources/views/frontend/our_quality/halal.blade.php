@extends('frontend.layout')

@section('content')

<body class="skin-black fixed our-quality" style="background: #282828">
    <!-- fixed page-->
    <section class=" dark full-height dark transparent" style="">
        <!-- <div class="owl-carousel owl-theme" id="bgslider">
            <div class="item" style="background:url('{{ asset('images/home-slid1.jpg') }}')"></div>
            <div class="item" style="background:url('{{ asset('images/home-slid2.jpg') }}') "></div>
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
                    <div class="col-lg-3 col-12 ">
                        <div class="ul-dropdown">
                            <div class="selected">Halal</div>
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
                            <h2 class="lato-black text-uppercase while mb-4">Halal</h2>
                            <div class="owl-carousel scroll owl-theme iso box-shadow">
                                @foreach($quality_standards as $quality_standard)
                                    <div class="item">
                                        <a href="#quality_standard_box" data-toggle="modal" data-post="{{ $quality_standard }}">
                                        <i class="flaticon-zoom-in"></i>
                                            <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $quality_standard->standard_image) }}" />
                                            <div class="bottom">
                                                <p>{!! $quality_standard->standard_description !!}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
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
    <!-- gallery box -->
    <div class="modal fade" id="quality_standard_box" tabindex="-1" role="dialog" aria-labelledby="quality_standard_box" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="galery">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="quality_standard_data"></div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | Quality | Halal')