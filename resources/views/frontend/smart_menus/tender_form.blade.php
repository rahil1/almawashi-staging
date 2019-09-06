@extends('frontend.layout')

@section('content')

<body class="dark-skin" style="background: whitesmoke;" onload="document.getElementById('scrollIntoView').scrollIntoView({behavior: 'smooth'});">
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
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <ul class="side-nav p-0">
                            @foreach ($nav_links as $nav_link) 
                                <li><a href="{{ url($nav_link->page_d_path) }}">{{ str_replace('_', ' ',$nav_link->page_name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end side nav-->
                    <h1 class="page-title">Open Tenders</h1>                    
                </div>
            </div>
        </div>

        <!-- end main content-->
    </section>
    <!-- end default page-->
    <!-- page content-->
    <section id="scrollIntoView"></section>
    <section class="page-content news-lists" id="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    @if($selected_tender != null)
                        <div class="single-tender icon">
                            <div class="row">
                                <div class="col-12">
                                    <p class="tender-date">Tender End Date: {{ $selected_tender->tender_expiration_date->toFormattedDateString() }}</p>
                                    <div class="meta">
                                        <p><span>Tender Code: </span>{{ $selected_tender->tender_code }}</p>
                                        <!-- <p><span>Supplier: </span>John Doe</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 order-2 order-md-1">
                                    <h6 class="lato font-26 color-grey">{{ $selected_tender->tender_title }}</h6>
                                    <p class="font-16s">{{ $selected_tender->tender_description }}</p>
                                    
                                </div>
                                <div class="col-12 order-1 order-md-2">
                                    <form id="tender_form" class="no-border" method="POST" action="{{ route('create_supplier_tender', $selected_tender->tender_code) }}">
                                    <!-- <form id="tender_form" class="no-border" method="POST"> -->
                                        @csrf
                                        {{ method_field('patch') }}
                                        <div class="row cloned">
                                            <div class="col-12 entry-div main">
                                                @foreach($selected_tender->tender_item_details as $tender_item_detail) 
                                                   <div class="row">
                                                        <div class="form-group col-md-4 col-sm-12 ">
                                                            <label>Item Name</label>
                                                            <input type="text" class="form-control" disabled value="{{ $tender_item_detail->name }}">
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <label>Description</label>
                                                            <input type="text" class="form-control" disabled value="{{ $tender_item_detail->description }}">
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <label>Quantity</label>
                                                            <input name="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}">
                                                            @error('quantity')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <label>Unit</label>
                                                            <input name="unit" type="text" class="form-control @error('unit') is-invalid @enderror" value="{{ old('unit') }}">
                                                            @error('unit')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <label>Specification</label>
                                                            <input name="spec" type="text" class="form-control @error('spec') is-invalid @enderror" value="{{ old('spec') }}">
                                                            @error('spec')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <label>Unit Price</label>
                                                            <input name="unit_price" type="text" class="form-control @error('unit_price') is-invalid @enderror" value="{{ old('unit_price') }}">
                                                            @error('unit_price')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="clobebefore"></div>
                                            <div class="form-group checking col-md-12 col-sm-12">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="">I read, understood, and agree to all the <a href="#">Terms of Supply</a></label>
                                            </div>
                                            <div class="form-group submit col-md-12 col-sm-12 mt-3">
                                                <!-- <a href="#" id="add_item">Add Item</a> -->
                                                <button type="submit" class="btn btn-primary" id="tender_form_submit">Submit Form</button>
                                                <!-- <button type="submit" class="btn btn-primary" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                </button> -->
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                @if (session('status'))
                                                    <div class="alert alert-success alert-dismissible">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
                                                        {{ session('status') }} 
                                                        <a href="{{ route('open_tenders') }}">Please click here to view other tenders</a>
                                                    </div>
                                                @elseif (session('statusExist'))
                                                    <div class="alert alert-danger alert-dismissible">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
                                                        {{ session('statusExist') }}
                                                        <a href="{{ route('open_tenders') }}">Please click here to view other tenders</a>

                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                    </form>
                                    <!-- Logout form -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <!-- end logout form -->
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>


        </div>
    </section>
    <!--end page content-->
    <!--footer data-->
    @include('includes.footer-data')
    @endsection
    @section('title','Al Mawashi | Open Tenders | Tender Form') 