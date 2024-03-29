@extends('frontend.layout')

@section('content')

<body class="skin-light fixed" style="background: #eaeaea">
    <!-- fixed page-->
    <section class=" light full-height transparent" >
        <!-- menu header-->
        @include('includes.top-nav')

        <!-- menu header-->
        <!--main content-->
        <div id="main-content" class="products-pages">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-lg-3 col-12">
                        <div class="ul-dropdown">
                            <div class="selected">Carcass</div>
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
                            <div class="owl-carousel owl-theme carcass scroll box-shadow">
                                @foreach($products as $product)
                                    <div class="item">
                                        <a href="#product-box" data-toggle="modal" data-post="{{ $product }}">
                                            <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $product->product_image) }}" />
                                            <h6 class="text-left">{{ $product->product_name }}</h6>
                                            <i class="flaticon-zoom-in"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <!-- end righ content -->
                    <h1 class="page-title" style="font-size:8em">Our Products</h1>
                </div>
            </div>
        </div>
        <!--main content-->

    </section>
    <!-- end fixed page-->
     <!-- product box -->
     <div class="modal fade" id="product-box" tabindex="-1" role="dialog" aria-labelledby="product-box" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="galery">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="product-data"></div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi - CARCASS') 