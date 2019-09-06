@extends('frontend.layout')

@section('content')

<body class="dark-skin sticky-header">
    <!-- default page-->
    <section class="default header dark dark transparent" style="">
        <div class="owl-carousel owl-theme" id="bgslider">
            <!-- <div class="item" style="background:url('{{ asset('images/home-slid1.jpg') }}')"></div>
            <div class="item" style="background:url('{{ asset('images/home-slid2.jpg') }}') "></div> -->
            <div class="item" style="background:url('{{ asset('images/HomePageImages/1.jpg') }}')"></div>
            <div class="item" style="background:url('{{ asset('images/HomePageImages/2.jpg') }}')"></div>
            <div class="item" style="background:url('{{ asset('images/HomePageImages/3.jpg') }}')"></div>
            <div class="item" style="background:url('{{ asset('images/HomePageImages/4.jpg') }}')"></div>
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
                            <!-- <li><a href="news.php">News</a> </li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="articles.php">Articles</a></li>
                            <li><a href="social-media.php">Social Media</a></li> -->
                            @foreach ($nav_links as $nav_link) 
                                <li><a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name) }}</a></li>
                            @endforeach

                            
                        </ul>
                    </div>
                    <!-- end side nav-->
                    <div class="col-xl-7 col-lg-6  col-md-12 col-sm-12 align-self-center">
                        <ul class="smart-icons text-right p-0">
                            @include('includes.actionbar-links')
                        </ul>
                    </div>
                    <h1 class="page-title news-media-title">News & Media</h1>
                </div>
            </div>
            <!-- end main content-->
    </section>
    <!-- end default page-->
    <!-- page content-->
    <section class="page-content news-lists">
        <div class="container-fluid">

            <div class="row">



                @foreach ($coverages as $coverage)
                <!--post-->
                <div class="col-lg-4 col-md-6 col-sm-12 pr-lg-4 pl-lg-4 pb-5 pb-5">
                    <div class="news-post">
                    <a href="#" id="video" data-toggle="modal" data-target="#news-box" data-post="{{ $coverage }}">
                        <img src="{{ $coverage->media_image != null ? url()->assetFrom(config('externalAssets.ext_asset_link'), $coverage->media_image) : ($coverage->media_video != null ? json_decode($coverage->media_video)->image : '') }}" class="img-full" /></a>
                       
                        <div class="news-content">
                            <p class="post-meta">{{$coverage->getMediaTypeString->media_type}} | {{ $coverage->created_at->toFormattedDateString() }}</p>
                            <h3>{{$coverage->media_title}}</h3>
                            <a href="{{route('read_more', $coverage->media_id)}}">Read More</a>
                            <div class="share">
                                <ul>
                                    <li class="heading">Share This</li>
                                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post-->
                @endforeach
            </div>
        </div>
    </section>
    <!--end page content-->
    <!--footer data-->
    <!-- gallery box -->
    <div class="modal fade" id="news-box" tabindex="-1" role="dialog" aria-labelledby="news-box" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="galery">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="news-data"></div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer-data')

    @endsection
    @section('title','Al Mawashi - News') 