@extends('frontend.layout')

@section('content')

<body class="skin-light fixed" style="background: #eaeaea">
    <!-- fixed page-->
    <section class=" full-height transparent" style="">
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
                                    <form class="no-border mt-4" action="{{ route('submit_job', $selected_career->career_id) }}" >
                                        <div class="row">
                                            <div class="form-group col-md-4 col-sm-12 ">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="John">
                                            </div>
                                            <div class="form-group col-md-4 col-sm-12">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                            <div class="form-group col-md-4 col-sm-12">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" placeholder="johndoe@gmail.com">
                                            </div>
                                            <div class="form-group col-md-4 col-sm-12">
                                                <label>Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="557571437">
                                            </div>
                                            <div class="form-group col-md-4 col-sm-12">
                                                <label>Age</label>
                                                <input type="text" class="form-control" placeholder="35">
                                            </div>
                                            <div class="form-group col-md-4 col-sm-12">
                                                <label>Nationality</label>
                                                <select class="custom-select" id="">
                                                    <option selected>Select Country</option>
                                                    @foreach($locations as $user_locations)
                                                        <option value="{{$user_locations}}">{{$user_locations}}</option>
                                                    @endforeach
                                                </select>   
                                                    
                                            </div>
                                            <div class="form-group col-md-4 col-sm-12">
                                                <label>Attach your CV</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 mt-3">
                                                <button type="submit" class="btn btn-primary">Apply to this Job</button>
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
            <h1 class="page-title">Careers Hub</h1>
        </div>
        <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi | Careers Portal') 