@extends('frontend.layout')

@section('content')

<body class="dark-skin">
    <!-- default page-->
    <section class="default header dark dark transparent" style="">
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
                <div class="row h-100">
                    <!--side banc-->
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <ul class="side-nav p-0">
                            @foreach ($nav_links as $nav_link) 
                                <li>
                                    @if((url()->current() != url($nav_link->section_path)))
                                        <a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name)}}</a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end side nav-->
                    <div class="col-xl-7 col-lg-6  col-md-12 col-sm-12 align-self-center">
                        <ul class="smart-icons text-right p-0">
                            @include('includes.actionbar-links')
                        </ul>
                    </div>
                    <h1 class="page-title">Our Services</h1>
                </div>
            </div>
            <!-- end main content-->
    </section>
    <!-- end default page-->
    <div id="main-content" class="m-0">
        <!-- page section 01 -->
        <div class="page-section" style="background: #f5f5f5">
            <div class="container-fluid">
                @if($services->first() != null)    
                    <div class="row mb-5 pl-4 pl-mb-0">
                        <div class="col-12">
                            <div class="content-area">
                                <h2 class="color-theme style2 mb-3 d-block d-md-none">Retail</h2>
                            </div>
                        </div>
                        <!-- content -->
                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center order-2 order-md-1">
                            <div class="content-area  pl-lg-5 pl-md-5">
                            <h2 class="color-theme style2 mb-3 mb-3 d-none d-md-block">Retail</h2>
                                <p>{!! $services->first()->service_description !!}</p>
                                <a href="{{ $services->first()->service_read_more_link }}">SEND US YOUR ENQUIRY</a>
                            </div>
                        </div>
                        <!-- image box -->
                        <div class="col-lg-8 col-md-6 col-sm-12 mt-sm-5 mb-4 mb-mb-0 order-1 order-md-2">
                            <div class="image-box">
                                <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $services->first()->service_image) }}" class="img-full" />
                            </div>
                        </div>
                    </div>
                @endif
                @if($services->get(1) != null)
                    <div class="row mb-5 pl-4 pl-mb-0">
                        <!-- image box -->
                        <div class="col-lg-5 col-md-5 col-sm-12 mb-sm-5 mb-4 mb-mb-0">
                            <div class="image-box">
                                <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $services->get(1)->service_image) }}" class="img-full" />
                            </div>
                        </div>
                        <!-- content -->
                        <div class="col-lg-7 col-md-7 col-sm-12 align-self-center">
                            <div class="content-area">
                                <p>{!! $services->get(1)->service_description !!}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @if($services->get(2) != null)
        <!-- end page section 01 -->
        <!-- page section 02 -->
        <div class="page-section" style="background: #fff">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-12 mx-auto">
                        <h2 class="font-32 text-center">When you become a customer or partner with us, you become a part of our family</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page section 02 -->
        <!-- page section 03 -->
        <div class="page-section" style="background: #f5f5f5">
            <div class="container-fluid">
                    <div class="row mb-5 pl-4 pl-mb-0">
                        <!-- content -->
                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center order-2 order-md-1">
                            <div class="content-area">
                                <p>{!! $services->get(2)->service_description !!}</p>
                                <a href="{{ $services->get(2)->service_read_more_link }}">SEND US YOUR ENQUIRY</a>
                            </div>
                        </div>
                        <!-- image box -->
                        <div class="col-lg-8 col-md-6 col-sm-12 mt-sm-5 mb-4 mb-mb-0 order-1 order-md-2">
                            <div class="image-box">
                                <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $services->get(2)->service_image) }}" class="img-full" />
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!-- end page section 03 -->
        <!--footer data-->
        @include('includes.footer-data')
        @endsection
        @section('title','Almawashi | Services | Retail')