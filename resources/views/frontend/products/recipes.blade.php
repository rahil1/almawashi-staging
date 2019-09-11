@extends('frontend.layout')

@section('content')

<body class="skin-light fixed" style="background: #eaeaea">
    <!-- fixed page-->
    <section class=" light full-height transparent" s>
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
                            <div class="selected">Recipies</div>
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
                    <div class="col-lg-9 col-12 ">
                        <div class="content-area">
                            <!-- Recepies slider -->
                            <div class="owl-carousel owl-theme scroll recipies">
                                @for($i=0; $i<$products->count(); $i++)
                                    <div class="item">
                                        <div class="inner">
                                            <!-- <a href="#product-box" data-toggle="modal" data-post="{{ $products[$i] }}"> -->
                                                <img width="64" height="280" src="{{ $products[$i]->recipe_image != null ? url()->assetFrom(config('externalAssets.ext_asset_link'), $products[$i]->recipe_image) : ($products[$i]->recipe_video != null ? json_decode($products[$i]->recipe_video)->image : '') }}" />
                                                <h6 class="text-left">{{ $products[$i]->recipe_title }}</h6>
                                                <!-- <i class="flaticon-zoom-in"></i> -->
                                            <!-- </a> -->
                                        </div>
                                        @if ($i+1 < $products->count())
                                            <div class="inner">
                                                <!-- <a href="#product-box" data-toggle="modal" data-post="{{ $products[$i+1] }}"> -->
                                                    <img width="64" height="280" src="{{ $products[$i+1]->recipe_image != null ? url()->assetFrom(config('externalAssets.ext_asset_link'), $products[$i+1]->recipe_image) : ($products[$i+1]->recipe_video != null ? json_decode($products[$i+1]->recipe_video)->image : '') }}" />

                                                    <h6 class="text-left">{{ $products[$i+1]->recipe_title }}</h6>
                                                    <!-- <i class="flaticon-zoom-in"></i> -->
                                                <!-- </a> -->
                                            </div>
                                            @php $i++; @endphp
                                        @endif
                                    </div>
                                @endfor
                            </div>
                            <!-- END Recepies slider -->
                            <div class="owl-carousel owl-theme scroll recipies-mobile">
                                <div class="item">
                                    @foreach($products as $product)   
                                        <!-- <a href="#product-box" data-toggle="modal" data-post="{{ $product }}"> -->
                                            <img width="64" height="280" src="{{ $product->recipe_image != null ? url()->assetFrom(config('externalAssets.ext_asset_link'), $product->recipe_image) : ($product->recipe_video != null ? json_decode($product->recipe_video)->image : '') }}" />
                                            <h6 class="text-left">{{ $product->recipe_title }}</h6>
                                            <!-- <i class="flaticon-zoom-in"></i> -->
                                        <!-- </a> -->
                                    @endforeach
                                </div>
                            </div>


                        </div>

                    </div>
                    <!-- end righ content -->
                    <h1 class="page-title products-title" style="font-size:8em" >Our Products</h1>
                </div>
            </div>
        </div>
        <!--main content-->

    </section>
    <!-- end fixed page-->
    <!-- gallery box -->
    <!-- <div class="modal fade" id="product-box" tabindex="-1" role="dialog" aria-labelledby="product-box" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="galery">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="product-data"></div>
                </div>
            </div>
        </div>
    </div> -->
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi - RECIPES') 