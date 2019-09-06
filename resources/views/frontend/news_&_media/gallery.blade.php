@extends('frontend.layout')

@section('content')

<body class="skin-black" style="background: #282828">
    <!-- fixed page-->
    <section class="fixed dark full-height dark transparent" style="">
        <!-- menu header-->
        @include('includes.top-nav')

        <!-- menu header-->
        <!--main content-->
        <div id="main-content" class="">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  ">
                        <ul class="side-nav  p-0">
                            @foreach ($nav_links as $nav_link) 
                                <li><a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name) }}</a></li>
                            @endforeach
                        </ul>
                        <ul class="smart-icons text-left style-2 p-0">
                            @include('includes.actionbar-links')
                        </ul>
                    </div>
                    <!-- end left links -->
                    <!-- right content -->
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
                        <div class="content-area">
                            <div class="owl-carousel owl-theme scroll box-shadow overlay overlay-one  galley-carousel">
                                @foreach($coverages as $coverage)
                                    <div class="item">
                                        <a href="#gallery-box" data-toggle="modal" data-post="{{ $coverage }}"><img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $coverage->media_image) }}" /><i class="flaticon-zoom-in"></i></a>
                                        <div class="bottom">
                                            <h6>{{ $coverage->media_title }}</h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <!-- end righ content -->
                    <h1 class="page-title news-media-title">News & Media</h1>
                </div>
            </div>

        </div>
        <!--end main content-->

    </section>
    <!-- end fixed page-->
    <!-- gallery box -->
    <div class="modal fade" id="gallery-box" tabindex="-1" role="dialog" aria-labelledby="gallery-box" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="galery">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="gallery-data"></div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('title','Al Mawashi - Gallery') 