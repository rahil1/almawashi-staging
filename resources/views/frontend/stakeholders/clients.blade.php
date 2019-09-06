@extends('frontend.layout')

@section('content')

<body class="skin-light fixed shareholder" style="background: #fff">
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
                        <div class="ul-dropdown">
                            <div class="selected">Clients</div>
                            <ul class="side-nav style-dropdown  p-0">
                                @foreach ($nav_links as $nav_link) 
                                    <li>
                                        <a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name)}}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <ul class="smart-icons text-left  p-0">
                                @include('includes.actionbar-links')
                            </ul>
                        </div>
                    </div>
                    <!-- end left links -->
                    <!-- right content -->
                    <div class="col-lg-7 col-12 ">
                        <div class="content-area">
                            <h2 class="color-theme">Clients</h2>
                            <div class="tabs almawashi">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  
                                    <li class="nav-item">
                                        <a class="nav-link active" id="report" data-toggle="tab" href="#tab-one" role="tab" aria-controls="report" aria-selected="true">Overview</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" id="Disclosure" data-toggle="tab" href="#tab-two" role="tab" aria-controls="report" aria-selected="true">Request Statement</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="Disclosure" data-toggle="tab" href="#tab-three" role="tab" aria-controls="contact" aria-selected="true">Contact Us</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="myTabContent">
                                    <!-- tab -->
                                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="report">
                                        <div class="row">
                                            <!-- testimonial -->
                                            <div class="col-md-6 col-sm12">

                                                <div class="testimonial">
                                                    <ul>
                                                        @foreach($stakeholders as $stakeholder)    
                                                            <li>
                                                                <p>{{ $stakeholder->stakeholder_statement }}</p>
                                                                <div class="author">
                                                                    <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $stakeholder->stakeholder_image) }}" />
                                                                    <h6>{{ $stakeholder->stakeholder_name }} <span class="des">- {{ $stakeholder->stakeholder_designation }}</span></h6>
                                                                    <span>{{ $stakeholder->stakeholder_company }}</span>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- end testimonial -->
                                            <!-- logos -->
                                            

                                                <div class="col-md-6 col-sm12 pr-0">

                                                    <div class="owl-carousel owl-theme scroll clients">
                                                        <div class="item">
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/1.jpeg') }}" /></div>
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/2.jpg') }}" /></div>
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/3.png') }}" /></div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/4.png') }}" /></div>
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/5.png') }}" /></div>
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/6.jpg') }}" /></div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/7.png') }}" /></div>
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/8.jpg') }}" /></div>
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/9.jpg') }}" /></div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/10.png') }}" /></div>
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/12.jpg') }}" /></div>
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/13.png') }}" /></div>

                                                        </div>
                                                        <div class="item">
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/15.jpg') }}" /></div>
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/11.png') }}" /></div>
                                                            <div class="client"><img src="{{ asset('images/ClientLogos/14.png') }}" /></div>


                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <!-- logos -->  
                                            
                                        </div>
                                    </div>
                                    <!-- end tab -->
                                    <!-- tab -->
                                    <!-- <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="Disclosure">
                                        <div class="content">
                                            <div class="content-area ">
                                                <h2 class="font-32 color-dark text-capitalize lato">Please confirm the content type</h2>
                                            </div>

                                        </div>
                                    </div> -->
                                    <!-- end tab -->
                                    <!-- tab -->
                                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="Disclosure">
                                        <div class="content">
                                            <div class="content-area ">
                                                <form class="no-border">
                                                    <div class="row">
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
                                                        <div class="form-group col-md-12 col-sm-12 ">
                                                            <label>Select the office you wish to contact</label>
                                                            <select class="custom-select" id="inputGroupSelect02">
                                                                <option value="" selected>-</option>
                                                                @foreach($locations as $user_locations)
                                                                    <option value="{{$user_locations}}">{{$user_locations}}</option>
                                                                @endforeach
                                                            </select>                                                               
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
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end tab -->
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end righ content -->
                </div>


            </div>
        </div>

        </div>
        <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | Stakeholders | Clients')