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
                            
                            <form class="no-border" method="POST" action="{{ route('register') }}" style="margin-top:30px;">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <h4>Account Details</h4>
                                    </div> 

                                    <div class="form-group col-md-3 col-sm-12">
                                        <label for="email" >Email</label>
                                        <input id="email" placeholder="John@company.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3 col-sm-12">
                                            <label for="password">Password</label>
                                            <input id="password" placeholder="******" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="form-group col-md-3 col-sm-12">
                                            <label for="password-confirm">Repeat Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <h4>Profile</h4>
                                    </div>

                                    <div class="form-group col-md-3 col-sm-12">
                                            <label for="name" >Name</label>
                                           
                                            <input id="name" placeholder="johndoe" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                     <div class="form-group col-md-3 col-sm-12">
                                        <label>Company Name</label>
                                        <input name="company_name" type="text" value="{{ old('company_name') }}" class="form-control @error('company_name') is-invalid @enderror" placeholder="Almawashi">

                                        @error('company_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 col-sm-12">
                                        <label>Year Established</label>
                                        <input name="year_established" type="number" value="{{ old('year_established') }}" class="form-control @error('year_established') is-invalid @enderror" placeholder="1968">

                                        @error('year_established')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 col-sm-12">
                                        <label>Business Type</label>
                                        <input name="business_type" type="text" value="{{ old('business_type') }}" class="form-control @error('business_type') is-invalid @enderror" placeholder="Livestock Company">

                                        @error('business_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 col-sm-12">
                                        <label>Trade License Number</label>
                                        <input name="trn" type="text" value="{{ old('trn') }}" class="form-control @error('trn') is-invalid @enderror" placeholder="ABC123456789">

                                        @error('trn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 col-sm-12 dropdown" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <label>Country</label>
                                        <select name="country" value="{{ old('country') }}" class="form-control @error('country') is-invalid @enderror">
                                            <option selected value="">Select Country</option>
                                            @foreach($locations as $location)
                                                <option value="{{ $location->country }}">{{ $location->country }}</option>
                                            @endforeach   
                                        </select>   
                                        @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    </div>
                                    <div class="form-group col-md-3 col-sm-12">
                                        <label>City</label>
                                        <input name="city" type="text" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" placeholder="Dubai">

                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    </div>
                                    <div class="form-group col-md-3 col-sm-12">
                                        <label>Contact Number 1</label>
                                        <input name="phone_1" type="tel" value="{{ old('phone_1') }}" class="form-control @error('phone_1') is-invalid @enderror" placeholder="971 55 1234567">
                                        <!-- <input name="phone_1" type="tel" value="{{ old('phone_1') }}" class="form-control @error('phone_1') is-invalid @enderror" pattern="[0-9]{3} [0-9]{2} [0-9]{7}" placeholder="971 55 1234567"> -->

                                        @error('phone_1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 col-sm-12">
                                        <label>Contact Number 2</label>
                                        <input name="phone_2" type="tel" value="{{ old('phone_2') }}" class="form-control @error('phone_2') is-invalid @enderror" placeholder="971 55 1234567">

                                        @error('phone_2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 col-sm-12">
                                        <label>Area</label>
                                        <input name="area" type="text" value="{{ old('area') }}" class="form-control @error('area') is-invalid @enderror" placeholder="Jebel Ali">

                                        @error('area')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 col-sm-12">
                                        <label>Building Name / Number</label>
                                        <input name="address" type="text" value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror" placeholder="Sheikh Majid Building">

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> 

                                    <div class="form-group col-md-12 col-sm-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Signup</button> 
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('includes.footer-data')
@endsection
@section('title','Al Mawashi - Register') 
