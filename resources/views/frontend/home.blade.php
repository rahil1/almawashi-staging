@extends('frontend.layout')

@section('content')
<body class="fixed dark" style="background: #000">

    <!-- fixed page-->
    <section class="  full-height dark transparent" style="">
        <div class="owl-carousel owl-theme" id="bgslider">
            @include('includes.background_pictures')
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
                            <!-- <li><a href="news-and-media.php">News & Media</a> </li>
                            <li><a href="our-products.php">Products</a></li>
                            <li><a href="">Online Store</a></li>
                            <li><a href="today-recipe.php">Today’s Recipe</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li> -->
                            @foreach ($main_nav_links as $main_nav_link) 
                                <li><a href="{{ $main_nav_link->page_d_path }}">{{ str_replace('_', ' ',$main_nav_link->page_name) }}</a></li>
                            @endforeach
                            <!-- @foreach ($secondary_nav_links as $secondary_nav_link) 
                                <li><a href="{{ $secondary_nav_link->page_d_path }}">{{ $secondary_nav_link->page_name }}</a></li>
                            @endforeach -->

                        </ul>
                    </div>
                    <!-- end side nav-->
                    <div class="col-xl-7 col-lg-6  col-md-12 col-sm-12 align-self-center">
                        <ul class="smart-icons text-right p-0">
                            @include('includes.actionbar-links')
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end main content-->
            <!-- services-->
            <div class="container-fluid page-boxes">
                <div class="row p-0">
                    @foreach ($secondary_nav_links as $secondary_nav_link)

                        <div class="page-box">
                            <h3>{{$secondary_nav_link->page_name_prefix}} <span>{{ str_replace('_', ' ',$secondary_nav_link->page_name) }}</span></h3>
                            <p>{{$secondary_nav_link->page_link_description}}</p>
                            <a class="animate" href="{{ $secondary_nav_link->page_d_path }}">View More</a>
                        </div>

                    @endforeach
                </div>
            </div>
            <!-- end services-->
    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi | Home') 