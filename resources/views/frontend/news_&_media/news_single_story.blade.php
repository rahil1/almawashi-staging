@extends('frontend.layout')

@section('content')

<body class="skin-white">
    <!-- default page-->
    <section class="default dark dark transparent" style="">
        <!-- menu header-->
        @include('includes.top-nav')

        <!-- menu header-->
    </section>
    <!-- end default page-->
    <!-- page content-->
    <section class="page-content news-lists">
        <div class="container-fluid">

            <div class="row">
                <!--post-->
                <div class="col-lg-8 col-md-10 col-sm-12 align-self-center order-2 order-md-1" style="margin: 0 auto;">
                    <div class="image-box mb-4">
                        <img src="{{ $image }}" class="img-full" />
                    </div>
                    <div class="row mb-4 ">
                        <div class="col-md-6 col-12 align-self-center">
                            <p class="mb-0">{{ $media_type }} | {{ $date_of_coverage }}</p>
                        </div>
                        <div class="col-md-6 col-12 align-self-center text-md-right">
                            <div class="share mt-3 mt-md-0">
                                <ul class="mb-0">
                                    <li class="heading">Share This</li>
                                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    
                    <h3>{{ $title }}</h3>
                    <p>{!! $l_description !!}</p>
                    <p class="content-area"><a id="back" href="{{ url()->previous() }}">Back to News <i class="fas fa-long-arrow-alt-left"></i></a></p>
                </div>
                <!-- end post-->
            </div>
        </div>
    </section>
    <!--end page content-->
    <!--footer data-->

    @include('includes.footer-data')

    @endsection
    @section('title','Al Mawashi - News') 