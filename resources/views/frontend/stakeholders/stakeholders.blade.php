@extends('frontend.layout')

@section('content')

<body class="fixed skin-light" style="background: #eaeaea">
    <!-- fixed page-->
    <section class="full-height dark transparent shareholder" style="">
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
        <div id="main-content" class="products-pages">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-lg-5 col-12">
                        <div class="ul-dropdown">
                            <div class="selected">Stackeholders</div>
                            <ul class="side-nav style-dropdown p-0">
                                @foreach ($nav_links as $nav_link) 
                                    <li>
                                        <a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name)}}</a>
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
                    <div class="col-lg-7 col-12 ">
                        <div class="content-area">
                            @if($stakeholders->first() != null)
                                <h2 class="color-theme mb-3">Stakeholders</h2>
                                <!-- row top -->
                                <div class="row mb-4">
                                    <!-- image box-->
                                    <div class="col-lg-5 col-md-6 col-sm-12 align-self-center">
                                        <div class="content">
                                            <p class="font-12 mb-2">{!! $stakeholders->first()->stakeholder_statement !!}</p>
                                        </div>

                                    </div>
                                    <!-- content box-->
                                    <div class="col-lg-7 col-md-6 col-sm-12">
                                        <div class="image-box">
                                            <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $stakeholders->first()->stakeholder_image) }}" class="img-full" />
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!-- end row top -->

                            @if($stakeholders->get(1) != null)
                                <!-- row bottom -->
                                <div class="row">
                                    <!-- content box-->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="image-box">
                                            <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $stakeholders->get(1)->stakeholder_image) }}" class="img-full" />
                                        </div>

                                    </div>
                                    <!-- image box -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                                        <div class="content">
                                            <p class="font-12 mb-2">{!! $stakeholders->get(1)->stakeholder_statement !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!-- end row botom -->
                        </div>
                    </div>
                    <!-- end righ content -->
                </div>


            </div>
        </div>

        </div>
        <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | Stakeholders')