@extends('frontend.layout')

@section('content')

<body class="dark-skin sticky-header">
    <!-- default page-->
    <section class="default header dark dark transparent" style="">
        <!-- change this to be dynamic too from the backend -->
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
            <div class="row mb-5">
                <div class="col-sm-12 pr-lg-4 pl-lg-4 pb-5 pb-5 d-none d-lg-block">
                    @foreach ($coverages as $coverage)
                        <div class="news-post feature">
                            <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $coverage->media_image) }}" />
                            <div class="news-content">
                                <p class="post-meta">{{ $coverage->getMediaTypeString->media_type }} | {{ $coverage->created_at->toFormattedDateString()  }}</p>
                                <h3>{{ $coverage->media_title  }}</h3>
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
                        @break
                    @endforeach
                </div>
            </div>
            <div class="row">
                <!--post-->
                @foreach ($coverages as $coverage)
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 pr-lg-4 pl-lg-4 pb-5 pb-5 d-lg-none">
                        <div class="news-post">
                            <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $coverage->media_image)  }}" class="img-full" />
                            <div class="news-content">
                                <p class="post-meta">{{ $coverage->getMediaTypeString->media_type  }} | {{ $coverage->created_at->toFormattedDateString()  }}</p>
                                <h3>{{ $coverage->media_title  }}</h3>
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
                    @break
                @endforeach
                <!-- end post-->
                <!--post-->
                @php 
                    $coverages->shift();
                @endphp
                
                @foreach ($coverages as $coverage)
                <div class="col-lg-4 col-md-6 col-sm-12 pr-lg-4 pl-lg-4 pb-5 pb-5">
                    <div class="news-post">
                        <a href="#" id="video" data-toggle="modal" data-target="#gallery-box">
                            <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $coverage->media_image) }}" class="img-full" /></a>
                        <div class="news-content">
                            <p class="post-meta">{{ $coverage->getMediaTypeString->media_type }} | {{ $coverage->created_at->toFormattedDateString() }}</p>
                            <h3>{{ $coverage->media_title }}</h3>
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
                @endforeach
                <!-- end post-->
                
            </div>
            <!-- end row -->
            <div class="row">
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
        </div>
    </section>
    <!--end page content-->
    <!--footer data-->
    <!-- gallery box -->
    <div class="modal fade" id="gallery-box" tabindex="-1" role="dialog" aria-labelledby="gallery-box" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="video">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/ZMeS0ponHQ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a href="#" id="close-model" data-dismiss="modal"><i class="fas fa-times"></i></a>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi - Articles') 