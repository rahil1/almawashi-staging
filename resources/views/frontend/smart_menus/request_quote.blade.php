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
                    <div class="col-lg-7 col-12">
                        <div class="content-area">
                            

                            <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="row">

                                <div class="col-lg-12 col-12 mt-3">
                                    <h2 class="col-lg-8 pl-0 lato font-24 color-dark text-capitalize border-bottom">Send us your request for quotes</h2>

                                    <form class="no-border mt-4">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group col-md-3 col-sm-12 ">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" placeholder="John Doe">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-12">
                                                <label>Company / Private</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-12">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" placeholder="557571437">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-12">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" placeholder="johndoe@gmail.com">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-12">
                                                <label>Select point of Contact</label>
												<select class="custom-select" id="inputGroupSelect02">
													<option value="" selected>-</option>
                                                    @foreach($locations as $user_locations)
                                                        <option value="{{$user_locations}}">{{$user_locations}}</option>
                                                    @endforeach
												</select>																
                                            </div>			




                                            <div class="form-group col-md-4 col-sm-12">
                                                <label>Product Categories</label>
                                                <select name="product_category" id="product_category" class="custom-select dynamic" data-dependent="products">
                                                    <option value="">Select Product Category</option>
                                                    <!-- <option value="LIVESTOCK">Select product_category 2</option> -->
                                                    @foreach($product_categories as $product_category)
                                                        <option value="{{ $product_category }}">{{ ucfirst(strtolower(str_replace('_', ' ',$product_category))) }}</option>
                                                    @endforeach
                                                     
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4 col-sm-12">
                                                    <label>Products</label>
                                                    <select name="products" id="products" class="custom-select">
                                                    </select>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label>Your Message</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 mt-3">
                                                <button type="submit" class="btn btn-primary">Request Quote</button>
                                            </div>
                                        </div>
                                    </form>
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
    @section('title','Al Mawashi | Request Quote')