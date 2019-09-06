<!-- GO TO AUTH REGISTER FILE -->

@extends('frontend.layout')

@section('content')

<body class="skin-light fixed shareholder" style="background: #fff">
    <!-- fixed page-->
    <section class=" dark full-height dark transparent" style="">
        <!-- menu header-->
        @include('includes.top-nav')
        <!-- menu header-->
        <!--main content-->
        <div id="main-content" class="products-pages">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <!-- body content -->
                    <div class="col-lg-12 col-12 ">
                        <div class="content-area">
                            <h2 class="color-theme">Suppliers Signup</h2>
                                <!-- form -->
                                <form class="no-border" method="POST" action="{{ route('register') }}" style="margin-top:30px;">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <h4>Account Details</h4>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Email</label>
                                            <!-- <input type="text" class="form-control" placeholder="John@company.com"> -->
                                            <input id="email" placeholder="John@company.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Password</label>
                                            <!-- <input type="password" class="form-control" placeholder="******"> -->
                                            <input id="password" placeholder="******" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Repeat Password</label>
                                            <!-- <input type="password" class="form-control" placeholder="******"> -->
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <!-- <div class="col-md-12 col-sm-12">
                                            <h4>Profile</h4>
                                        </div> -->
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Name</label>
                                            <input id="name" type="text" class="form-control" placeholder="johndoe">
                                        </div>
                                        <!-- <div class="form-group col-md-3 col-sm-12">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" placeholder="Almawashi">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Year Established</label>
                                            <input type="number" class="form-control" placeholder="1968">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Business Type</label>
                                            <input type="text" class="form-control" placeholder="Livestock Company">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Trade License Number</label>
                                            <input type="text" class="form-control" placeholder="ABC123456789">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12 dropdown" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <label>Country</label>
                                            <select class="custom-select" id="inputGroupSelect02">
                                                <option selected>Select Country</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="Australia">Australia</option>
                                                <option value="South Africa">South Africa</option>
                                            </select>                                                               
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="Dubai">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Contact Number 1</label>
                                            <input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="+971 55 1234567">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Contact Number 2</label>
                                            <input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="+971 55 1234567">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Area</label>
                                            <input type="text" class="form-control" placeholder="Jebel Ali">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12">
                                            <label>Building Name / Number</label>
                                            <input type="text" class="form-control" placeholder="Sheikh Majid Building">
                                        </div> -->
                                        <!-- <div class="form-group col-md-3 col-sm-12">
                                            <label>Email</label>
                                            <input type="text" class="form-control" placeholder="John@company.com">
                                        </div> -->
                                        <div class="form-group col-md-12 col-sm-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Signup</button> 
                                            <a href="{{ url('stakeholders/supplier-dashboard')}}">See Dashboard</a>
                                        </div>
                                    </div>
                                </form>
                                <!-- end form -->
                        </div>
                    </div>
                    <!-- end body content -->
                </div>


            </div>
        </div>

        </div>
        <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | Stakeholders | Supplier Signup')
