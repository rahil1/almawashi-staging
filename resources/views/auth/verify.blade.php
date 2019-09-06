@extends('frontend.layout')

@section('content')
<body class="skin-light fixed shareholder" style="background: #fff">
    <!-- fixed page-->
    <section class=" dark full-height dark transparent" style="">
        <!-- menu header-->
        @include('includes.top-nav')
        <div id="main-content" class="products-pages">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-lg-12 col-12 ">
                        <div class="content-area">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                                        <div class="card-body">
                                            @if (session('resent'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                                </div>
                                            @endif

                                            {{ __('Before proceeding, please check your email for a verification link.') }}
                                            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <form class="no-border">
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 mt-3">

                                                <button type="submit" class="btn btn-primary" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Logout form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <!-- end logout form -->
    </section>

@include('includes.footer-data')
@endsection
@section('title','Al Mawashi - Verify Email') 