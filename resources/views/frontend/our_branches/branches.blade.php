@extends('frontend.layout')

@section('content')

<body class="skin-light fixed our-branches" style="background: #fff">
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
        <div id="main-content" class="" style="">
            <div class="container-fluid h-100 pr-lg-0">
                <!-- row top -->
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-lg-3 col-12 justify-content-center align-self-end ">

                        <ul class="smart-icons text-left style-2 p-0">
                            @include('includes.actionbar-links')
                        </ul>
                    </div>
                    <!-- end left links -->
                    <!-- right content -->
                    <div class="col-lg-9 col-12 pr-lg-0">
                        <div class="content-area">
                            <h2 class="lato-black text-uppercase color-theme ml-lg-4">Branches</h2>
                            <div class="owl-carousel owl-theme branches scroll">
                                @foreach($locations as $location)
                                    <div class="item">
                                        <div class="branch icon">
                                            <h2 class="lato-bold font-22 color-dark">{{ $location->country }}</h2>
                                            <p>{{ $location->address }}, <br>P.O.Box: {{ $location->POBox }}, {{ $location->city }}, {{ $location->country }}</p>
                                            <ul class="contact">
                                                <li><i class="fas fa-phone"></i>{{ $location->phone }}</li>
                                                <li><i class="fas fa-fax"></i>{{ $location->fax }}</li>
                                                <li><i class="far fa-envelope"></i><a href="#">{{ $location->email }}</a></li>
                                            </ul>
                                            <ul class="btsn">
                                                <li><a href="{{route('sales_outlets', $location->location_code)}}">View Sales Outlets</a></li>
                                                <li><a href="{{ $location->map_link }}" target="_blank" class="btn default">VIEW MAP</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end righ content -->
                </div>
                <h1 class="page-title">Our Branches</h1>
            </div>
            <!-- end row top -->
        </div>
        <!--end main content-->
        
    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | Branches Network')