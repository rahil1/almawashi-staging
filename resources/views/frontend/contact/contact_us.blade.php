@extends('frontend.layout')

@section('content')

<body class="skin-light black-heading fixed">
    <!-- fixed page-->
    <section class=" light full-height transparent" style="background: #fff">
        <!-- menu header-->
        @include('includes.top-nav')
        <!-- menu header-->
        <!--main content-->
        <div id="main-content">
            <div class="container-fluid" style="">
                <div class="row">
                    <!-- colum left-->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="content-area">
                            <h2 class="mb-2 lato-black font-58">Get in touch</h2>
                            <!-- form -->
                            <form class="no-border">
                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12 ">
                                        <label>Select the office you wish to contact</label>
                                        <select class="custom-select" id="inputGroupSelect02">
                                            <option value="" selected>-</option>  
                                            @foreach($locations as $location)
                                                <option value="{{ $location->country }}">{{ $location->country }}</option>
                                            @endforeach

                                        </select>                                                               
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 ">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control col-md-6" placeholder="John Doe">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <label>Email Address</label>
                                        <input type="text" class="form-control col-md-6" placeholder="John@company.com">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <label>Contact Number</label>
                                        <input type="text" class="form-control col-md-6" placeholder="+971 55 1234567">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control col-md-6" placeholder="Al Mawashi">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <label>Your Message</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
                            <!-- <div class="contact-info mt-3 mb-3">
                                <ul class="contact">
                                    <li><i class="fas fa-phone"></i>+971 800 888822</li>
                                    <li><i class="fas fa-fax"></i>+971 4 8801119</li>
                                    <li><i class="far fa-envelope"></i><a href="#">elmco@emirates.net.ae</a></li>
                                    <li><i class="fas fa-map-marker-alt"></i>P.O.Box: 55540 Dubai, Jabel Ali complex – Al Ain Road</li>
                                    
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- end colum left-->
                    <!-- colum right-->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="row h-100">
                            <div class="col-md-9 col-sm-12">
                                <div class="row">
                                    @foreach($locations as $location)
                                        <!-- office location -->
                                        <div class="col-md-6 col-sm-12">

                                            <div class="office-info">
                                                <h3 class="lato-black">{{$location->country}}</h3>
                                                <ul class="contact">
                                                    <li><i class="fas fa-phone"></i>{{ $location->phone }}</li>
                                                    <li><i class="fas fa-fax"></i>{{ $location->fax }}</li>
                                                    <li><i class="far fa-envelope"></i><a href="{{ $location->email }}">{{ $location->email }}</a></li>
                                                    <li><i class="fas fa-map-marker-alt"></i>{{ $location->address }}<br>P.O.Box: {{ $location->POBox. ' ' .$location->city}}</li>
                                                    <!-- <li><a href="#" class="visi-office">Visit Website</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                            </div>
                            <div class="col-md-3 col-sm-12 justify-content-center align-self-center">
                                <ul class="smart-icons text-right p-0 ">
                                    @include('includes.actionbar-links') 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end colum right-->
                    <h1 class="page-title">Contact Us</h1>
                </div>
            </div>
        </div>

        <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | Contact Us')