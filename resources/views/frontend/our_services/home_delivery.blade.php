@extends('frontend.layout')

@section('content')

<body class="skin-black fixed" style="background: #000">
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
        <div id="main-content" class="products-pages home-delivery">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 ">
                        <ul class="side-nav p-0">
                            @foreach ($nav_links as $nav_link) 
                                <li>
                                    @if((url()->current() != url($nav_link->section_path)))
                                        <a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name)}}</a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        <ul class="smart-icons text-left style-2 p-0">
                            @include('includes.actionbar-links')
                        </ul>
                    </div>
                    <!-- end left links -->
                    @if($services->first() != null)    
                    <!-- right content -->
                    <div class="col-xl-7 col-lg-6  col-md-12 col-sm-12 align-self-center">
                        <div class="content-area">
                            <h2 class="color-theme style2 mb-4">Home Delivery</h2>
                            <!-- row top -->
                            <div class="row  mb-4">
                                <!-- image box-->
                                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6 mb-sm-3">
                                    <div class="image-box">
                                        <!-- <img src="url()->assetFrom(config('externalAssets.ext_asset_link'), $services->first()->service_image)" class="img-full d-none d-md-block" /> -->
                                        <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), 'uploads/Services/Home_Delivery/App_image.gif') }}" class="img-full d-none d-md-block" />
                                        <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'),'uploads/Services/Home_Delivery/home-deliverym.png') }}" class="img-full  mb-3 mb-3 d-block d-md-none" />
                                    </div>
                                </div>
                                <!-- content box-->
                                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-12 align-self-center">
                                    <div class="content">
                                        <p class="font-12 mb-2">{!! $services->first()->service_description !!}</p>
                                        <div class="apps">
                                            <a href="#"><img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'),'uploads/Services/Home_Delivery/apple.png') }}"  /></a>
                                            <a href="#"><img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'),'uploads/Services/Home_Delivery/google.png') }}"  /></a>
                                        </div>
                                        <a href="#" class="lato-black font-16 text-uppercase color-white">Visit Our Online Store</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end row top -->
                        </div>
                    </div>
                    <!-- end righ content -->
                    @endif
                </div>
            </div>

        </div>
        <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | Services | Home Delivery')