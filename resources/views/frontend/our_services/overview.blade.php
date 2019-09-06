@extends('frontend.layout')

@section('content')


<body class="skin-black fixed" style="background: #000">
    <!-- fixed page-->
    <section class=" dark full-height dark transparent" style="">
        <div class="owl-carousel owl-theme" id="bgslider">
            <!-- <div class="item" style="background:url('{{ asset('images/home-slid1.jpg') }}')"></div>
            <div class="item" style="background:url('{{ asset('images/home-slid2.jpg') }}') "></div> -->
        </div>
        <!-- menu header-->
        @include('includes.top-nav')
        <!-- menu header-->
        <!--main content-->
        <div id="main-content" class="products-pages">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <div class="ul-dropdown">
                            <div class="selected">Services</div>
                            <ul class="side-nav p-0 style-dropdown">
                                @foreach ($nav_links as $nav_link) 
                                <li>
                                    @if((url()->current() != url($nav_link->section_path)))
                                        <a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name)}}</a>
                                    @endif
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
                <div class="col-xl-7 col-lg-6  col-md-12 col-sm-12">
                    <div class="content-area">
                        @if($services->first() != null)
                            <h2 class="color-theme">Services</h2>
                            <!-- row top -->
                            <div class="row  mb-4">
                                <!-- image box-->
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="image-box">
                                            <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $services->first()->service_image) }}" class="img-full" />
                                    </div>
                                </div>
                                <!-- content box-->
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <div class="content">
                                        <p class="font-12 mb-2">{!! $services->first()->service_description !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endif    
                        <!-- end row top -->
                        <!-- row bottom -->
                        <div class="row">
                            @if($services->get(1) != null)
                                <!-- content box-->
                                <div class="col-lg-5 col-md-6 col-sm-12 order-2 order-md-1">
                                    <div class="content">
                                    <p class="font-12 mb-2">{!! $services->get(1)->service_description !!}</p>


                                    </div>
                                </div>
                                <!-- image box -->
                                <div class="col-lg-7 col-md-6 col-sm-12 order-1 order-md-2">
                                    <div class="image-box">
                                        <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $services->get(1)->service_image) }}" class="img-full" />
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!-- end row botom -->
                    </div>
                </div>
                <!-- end righ content -->
            </div>
        </div>

        </div>
        <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | Services')