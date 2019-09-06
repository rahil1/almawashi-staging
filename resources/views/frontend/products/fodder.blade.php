@extends('frontend.layout')

@section('content')

<body class="skin-light black-heading fixed sidebar-bg logo-white fertilizers">
    <!-- fixed page-->
    <section class=" light full-height transparent" style="background: #fff">
        <!-- menu header-->
        @include('includes.top-nav')
        <!-- menu header-->
        <!--main content-->
        <div id="main-content" class="products-pages">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-lg-3 col-12 ">
                        <div class="ul-dropdown">
                            <div class="selected">Fodder</div>
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
                    <div class="col-lg-8 col-12 ml-lg-auto ">
                        <div class="content-area">
                            @if($products->first() != null)
                                <div class="row">
                                    <!-- col right 01-->
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-md-3 order-2 order-sm-2 order-md-1">
                                        <h2 class="lato-black text-uppercase">{{ $products->first()->product_name }}</h2>
                                        <h6 class="font-28 lato sub-heading gery text-uppercase mb-5">(Biogenic)</h6>
                                        <p class="font-18">{!! $products->first()->product_description !!}</p>
                                    </div>
                                    <!-- col right 02 -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 pl-md-5 mb-3 mb-md-3  order-1 order-sm-1 order-md-2 mb-sm-4">
                                        <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $products->first()->product_image) }}" class="img-full" />
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- end righ content -->
                    <h1 class="page-title">Our Products</h1>
                </div>
            </div>
        </div>
        <!--end main content-->
    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | Our Products | Fodder') 