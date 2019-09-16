@extends('frontend.layout')

@section('content')

<body class="skin-light" style="background: #eaeaea">
    <!-- fixed page-->
    <section class=" light transparent" s>
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
                            <!-- Recepies -->
                            <h2 class="lato-black text-uppercase color-dark">Our Recipes</h2>
                            <ul class="recipies-list mt-5">
                                <!-- item -->
                                @for ($i = 0; $i < 5; $i++) 
                                <li>
                                    <div class="row">
                                        <!-- recp image -->
                                        <div class="col-md-4">
                                            <a href="#product-box" data-toggle="modal">
                                                <img src="{{ asset('images/video.jpg') }}" class="img-full" />
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="icon single-recipe">
                                                <h3 class="lato font-22 color-theme mb-2">How To Make Roasted Beef Like a Pro</h3>
                                                <h3 class="lato-black font-16 color-dark mb-2 text-uppercase">Cooking Instructions:</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tempor incididunt ut labore et dolore magna aliqua. Quis nostrud exercitation commodo consequat.</p>
                                                <h3 class="lato-black font-16 color-dark mb-2 text-uppercase">Ingredients:</h3>
                                                <ul class="ingredients">
                                                    <li>Beef 1kg</li>
                                                    <li>Beef 1kg</li>
                                                    <li>Beef 1kg</li>
                                                    <li>Beef 1kg</li>
                                                    <li>Yoghurt 500gms</li>
                                                    <li>Yoghurt 500gms</li>
                                                    <li>Yoghurt 500gms</li>
                                                    <li>Yoghurt 500gms</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                    <!-- item -->

                                    @endfor
                            </ul>
                            <!-- END Recepies -->
                        </div>
                        <!-- pagination -->
                        <div class="row mt-3">
                            <div class="col-sm-12 pr-lg-4 pl-lg-4">
                                <ul class="pagination">
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- enf pagination -->
                    </div>
                    <!-- end righ content -->
                    <!-- <h1 class="page-title products-title" style="font-size:8em" >Our Products</h1> -->
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
    @endsection
    @section('title','Al Mawashi - RECIPES')