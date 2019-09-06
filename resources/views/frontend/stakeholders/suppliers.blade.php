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
                            <div class="selected">Suppliers</div>
                            <ul class="side-nav  style-dropdown p-0">
                                @foreach ($nav_links as $nav_link) 
                                    <li>
                                        <a href="{{ url($nav_link->section_path) }}">{{ str_replace('_', ' ',$nav_link->section_name)}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <ul class="smart-icons text-left style-2 p-0">
                            @include('includes.actionbar-links')
                        </ul>

                    </div>
                    <!-- end left links -->
                    <!-- right content -->
                    <div class="col-lg-7 col-md-12 ">
                        <div class="content-area">
                            <h2 class="color-theme mb-3">Suppliers</h2>
                            <div class="row">
                                @if(!auth()->check())
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="content-area">
                                            <h4 class="lato font-28">Supplier Login</h4>
                                            <p>Login to your account to view open tenders, quotes and more.</p>
                                            <!-- form -->
                                            <form class="no-border" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-md-12 col-sm-12 ">
                                                        <label>Username</label>
                                                        <!-- <input type="text" class="form-control" placeholder="John Doe"> -->
                                                        <input id="email" placeholder="John Doe" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label>Password</label>
                                                        <!-- <input type="text" class="form-control" placeholder="••••••••••••"> -->
                                                        <input id="password" placeholder="••••••••••••" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12 mt-3">
                                                        <button type="submit" class="btn btn-primary">Login</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="login-links">
                                                <h6 class="lato-black text-uppercase font-14 color-dark">Having trouble signing in?</h6>
                                                <a href="{{route('password.update')}}">Click here to reset your password</a>
                                            </div>
                                            <div class="login-links">
                                                <h6 class="lato-black text-uppercase font-14 color-dark">Want to become a user?</h6>
                                                <a href="{{ route('register') }}">Click here to get in touch with us</a>
                                            </div>
                                            <!-- end form -->
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="content-area">
                                            <p>You are logged in! View your dashboard by clicking the button below.</p>
                                            <a class="view-dashboard-btn" href="{{ route('supplier_dashboard') }}">View Dashboard</a>
                                        </div>
                                    </div>
                                @endif

                                <!-- end form -->
                                <div class="col-md-8">
                                    <div class="tab-pane fade show active" id="tab-shareholders" role="tabpanel" aria-labelledby="shareholders">
                                        <div class="owl-carousel owl-theme scroll suppliers box-shadow">
                                            @foreach($stakeholders as $stakeholder)
                                                <div class="item">
                                                    <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), $stakeholder->stakeholder_image) }}" />
                                                    <div class="bottom">
                                                        <p>{{ $stakeholder->stakeholder_statement }}</p>
                                                        <div class="author">
                                                            <h6>{{ $stakeholder->stakeholder_name }} <span class="des">- {{ $stakeholder->stakeholder_designation }}</span></h6>
                                                            <span>{{ $stakeholder->stakeholder_company }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end righ content -->
                </div>
            </div>

        </div>
        <!--end main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title','Almawashi | Stakeholders | Suppliers')