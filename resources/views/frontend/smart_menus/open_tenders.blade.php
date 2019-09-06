@extends('frontend.layout')

@section('content')

<body class="dark-skin">
    <!-- default page-->
    <section class="default header dark dark transparent" style="">
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
                    <div class="col-lg-5 col-12 ">
                        <ul class="side-nav p-0">
                            @foreach ($nav_links as $nav_link) 
                                <li><a href="{{ url($nav_link->page_d_path) }}">{{ str_replace('_', ' ',$nav_link->page_name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end side nav-->
                    <h1 class="page-title">OPEN tenders</h1>
                </div>
            </div>
            <!-- end main content-->
    </section>
    <!-- end default page-->
    <!-- page content-->
    <section class="page-content news-lists">
        <div class="container-fluid">
            <div class="row">
                @foreach($tenders as $tenders)
                    <!-- tender icon -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="tender icon">
                            <h3 class="lato font-26 color-grey mb-4">{{ $tenders->tender_title }}</h3>
                            <h6 class="mb-4">End Date: {{ $tenders->tender_expiration_date->toFormattedDateString() }}</h6>
                            <ul class="btsn">
                                <li><a href="{{ route('tender_form', $tenders->tender_code) }}" class="btn default">SUBMIT PROPOSAL</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end tender icon -->
                @endforeach
                <!-- end tender icon -->

            </div>
        </div>
    </section>
    <!--end page content-->
    <!--footer data-->
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi | Open Tenders') 