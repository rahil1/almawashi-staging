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
                    <div class="col-lg-7 col-md-12 ">
                        <div class="content-area">
                            <div class="owl-carousel owl-theme branches carrer scroll">
                                @foreach($careers as $career)
                                    <div class="item">
                                        <div class="branch  icon">
                                            <h2 class="lato-bold font-28 color-dark text-capitalize mb-4">{{ $career->career_title }}</h2>
                                            <p>{!! $career->career_description !!}</p>
                                          
                                            <ul class="btsn mt-5">
                                                <li><a href="{{ route('apply_now', $career->career_id) }}" class="btn default">Apply Now</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- <div class="item">
                                    <div class="branch  icon">
                                        <h2 class="lato-bold font-28 color-dark text-capitalize mb-4">Digital Media Coordinator</h2>
                                        <p>Reporting to the firm’s Operations Manager, the ideal candidate is able to take the lead and shape our design strategy. He/She is experienced within a leadership role (or maybe you are a natural born leader). He/She has previous experience on user experience/user interface design strategy preferably in an agency. </p>
                                      
                                        <ul class="btsn mt-5">
                                            <li><a href="apply-now" class="btn default">Apply Now</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="branch  icon">
                                        <h2 class="lato-bold font-28 color-dark text-capitalize mb-4">Digital Media Coordinator</h2>
                                        <p>Reporting to the firm’s Operations Manager, the ideal candidate is able to take the lead and shape our design strategy. He/She is experienced within a leadership role (or maybe you are a natural born leader). He/She has previous experience on user experience/user interface design strategy preferably in an agency. </p>
                                      
                                        <ul class="btsn mt-5">
                                            <li><a href="apply-now" class="btn default">Apply Now</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="branch  icon">
                                        <h2 class="lato-bold font-28 color-dark text-capitalize mb-4">Digital Media Coordinator</h2>
                                        <p>Reporting to the firm’s Operations Manager, the ideal candidate is able to take the lead and shape our design strategy. He/She is experienced within a leadership role (or maybe you are a natural born leader). He/She has previous experience on user experience/user interface design strategy preferably in an agency. </p>
                                      
                                        <ul class="btsn mt-5">
                                            <li><a href="apply-now" class="btn default">Apply Now</a></li>
                                        </ul>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                        <!-- end righ content -->
                    </div>
                </div>
                <h1 class="page-title">Careers Hub</h1>
            </div>
            <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi | Careers Hub')