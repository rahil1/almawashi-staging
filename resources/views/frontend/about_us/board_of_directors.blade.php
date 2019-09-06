@extends('frontend.layout')

@section('content')

<body class="skin-dark fixed">
    <!-- fixed page-->
    <section class=" light dark full-height transparent" style="background: #282828">
        <!-- menu header-->
        @include('includes.top-nav')

        <!-- menu header-->
        <!--main content-->
        <div id="main-content">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-lg-3 col-12">
                        <div class="ul-dropdown">
                            <ul class="side-nav style-2 p-0" >
                                @foreach ($nav_links as $nav_link) 
                                    <li class="{{ (url()->current() == url($nav_link->section_path)) ? 'active' : '' }}">
                                        <a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <ul class="smart-icons text-left style-2 p-0" style="bottom: 0;" >
                            @include('includes.actionbar-links')
                        </ul>
                    </div>
                    <!-- end left links -->
                    <!-- right content -->
                    <div class="col-lg-9 col-12">
                        <div class="content-area" >
                            <div class="owl-carousel owl-theme scroll board box-shadow2">
                                @foreach($aboutus_contents as $aboutus_content)
                                    <!-- <div class="item">
                                        <a href="#product-box" data-toggle="modal" data-post="{{ $aboutus_content }}">
                                            <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $aboutus_content->content_image) }}" />
                                            <h6 class="text-left">{{ $aboutus_content->content_heading }}
                                            <span class="des">- {{ $aboutus_content->content_description }}</span></h6>
                                            <i class="flaticon-zoom-in"></i>
                                        </a>
                                    </div> -->
                                    <div class="item">
                                        <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $aboutus_content->content_image) }}" />
                                        <div class="bottom">
                                            <div class="author">
                                                <h6 class="text-left">{{ $aboutus_content->content_heading }} <span class="des">- {!! $aboutus_content->content_description !!}</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <!-- end righ content -->
                    <h1 class="page-title" style="font-size: 8em">Board Of Directors</h1>
                </div>
            </div>
        </div>
        <!--main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi | About Us | Board Of Directors') 