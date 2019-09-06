@extends('frontend.layout')

@section('content')

<body class="skin-black fixed" style="background: #000">
    <!-- fixed page-->
    <section class=" dark full-height dark transparent" style="">
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
                    <div class="col-lg-3 col-12 ">
                        <div class="ul-dropdown">
                            <div class="selected">Overview</div>

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
                        @if($products->first() != null) 
                            <div class="content-area">
                                <h2>Overview</h2>
                                <p>We are one of the main suppliers of livestock, fresh meat, frozen meat, chilled meat, and processed meat.</p>
                                <ul class="items">
                                    @foreach($products as $product)
                                        <li>
                                            <h6>{{ $product->product_name }}</h6>
                                            <p>{!! $product->product_description !!}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <!-- end righ content -->
                    <h1 class="page-title products-title">Our Products</h1>
                </div>
            </div>

        </div>
        <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi - Articles') 