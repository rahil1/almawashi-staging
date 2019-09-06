@extends('frontend.layout')

@section('content')

<body class="skin-light fixed" style="background: #eaeaea">
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
                    <div class="col-lg-5 col-12 ">
                        <ul class="side-nav p-0">
                            @foreach ($nav_links as $nav_link) 
                                <li><a href="{{ url($nav_link->page_d_path) }}">{{ str_replace('_', ' ',$nav_link->page_name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end left links -->
                    <!-- right content -->
                    <div class="col-lg-7 col-12 ">
                        <div class="content-area">
                            <h2 class="lato-black font-38 text-uppercase color-theme mb-3">{{ $selected_career->career_title }}</h2>
                            <p class="font-16">{!! $selected_career->career_description !!}</p>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                    <h2 class="font-20 color-dark text-capitalize lato-bold">You have successfully applied to this job.<br>
                                        If your profile is shortlisted, our recruitement team will get in touch with you.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end righ content -->
                </div>
            </div>
            <h1 class="page-title">Open Tenders</h1>
        </div>
        <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi | Apply Now')