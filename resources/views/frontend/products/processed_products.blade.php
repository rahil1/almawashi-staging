@extends('frontend.layout')

@section('content')

<body class="skin-dark fixed">
    <!-- fixed page-->
    <section class=" light dark full-height transparent" style="background: #282828">
        <!-- menu header-->
        @include('includes.top-nav')
        <!-- menu header-->
        <!--main-content-->
        <div id="main-content" class="products-pages">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-lg-3 col-12">
                        <div class="ul-dropdown">
                            <div class="selected">Processed Product</div>

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
                            <div class="owl-carousel owl-theme scroll prosessed">
                                @foreach($products as $product)
                                    <div class="item">
                                        <a href="#product-box" data-toggle="modal" data-post="{{ $product }}">
                                            <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $product->product_image) }}" />
                                            <h6>{{ $product->product_name }}</h6>
                                            <i class="flaticon-zoom-in"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <h3 class="lato-black font-48 color-theme mb-3">Title Goes Here</h3>
                                <p class="color-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>

                    </div>
                    <!-- end righ content -->
                    <h1 class="page-title products-title" style="font-size:8em" >Our Products</h1>
                </div>
            </div>
        </div>
        <!--end main-content-->

    </section>
    <!-- end fixed page-->
    <!-- gallery box -->
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
    @section('title','Al Mawashi - Processed Products') 