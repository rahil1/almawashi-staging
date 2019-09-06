    <div class="overlay"></div>
<!-- Desktop -->
<div id="header" class="top-header">
    <div class="container-fluid">
        <div class="row">
            <!-- colum left -->
            <div class="col-4 col-left fh d-flex align-self-center">

                <!-- logo -->
                <div class="logo">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo.png') }}" class="logo-dark" alt="">
                        <img src="{{ asset('images/logo-white.png') }}" class="logo-white" alt="">
                    </a>
                </div>
                <!-- end logo -->
                <div class="fixed-links">
                    <!-- using jQuery-->
                </div>
            </div>
            <!-- end colum left -->
            <!-- colum right -->
            <div class="col-8 col-right fh">
                <ul class="menu-right d-flex">
                    <li class="user-login">
                        <a href="#"><i class="flaticon-login"></i> Corporate Login</a>
                    </li>
                    <li class="country d-none">
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/globall.jpg') }}" />GLOBAL</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <ul class="tiny_scrolling" id="">
                                    <li><a href="#"><img src="{{ asset('images/uae.jpg') }}" />U.A.E</a></li>
                                    <li><a href="#"><img src="{{ asset('images/aus.jpg') }}" /> Australia</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="stock flaticon-graph"><span>{{ $stockValue }} KD 
                        @if($stockValue > $preStockValue)
                            <i style="color: lightgreen" >+{{$stockValueDiff}}</i>
                        @elseif($stockValue < $preStockValue)
                            <i style="color: red" >-{{$stockValueDiff}}</i>
                        @else
                            <i style="color: white" >+0.00</i>
                        @endif
                    </span><br>Stock Value</li>
                    <li class="lang justify-content-center align-self-center"><a href="http://209.97.171.132:81" class="active">EN</a>
                        | <a href="http://209.97.171.132:82">AR</a> </li>
                    <li class="clone-icon">
                        <ul class="smart-icons text-right p-0">
                            <li class=""><a class="flaticon-open-tender" href="open-tenders.php" data-toggle="tooltip" title="Open Tenders"></a></li>
                            <li class=""><a class="flaticon-request-qoute" href="request-quote.php" data-toggle="tooltip" title="Request Quote"></a></li>
                            <li class=""><a class="flaticon-carrer-hub" href="careers-hub.php" data-toggle="tooltip" title="Careers Hub"></a></li>
                        </ul>
                    </li>
                    <li class="hamburger justify-content-center align-self-center"><a href="#"><i class="fas fa-bars"></i></a></li>

                </ul>
            </div>
            <!-- sidebar menu -->
            <div id="mySidenav" class="sidenav">
                <ul class="navbar-nav menu">
                    <li class="lang justify-content-center align-self-center"><a href="http://209.97.171.132:81" class="active">EN</a> | <a href="http://209.97.171.132:82">AR</a> </li>
                    <li class="hamburger justify-content-center align-self-center" id="closebtn"><a href="#"><i class="fas fa-times"></i></a></li>
                </ul>
                <div class="menulist menu">
                    <li><a href="/">Home</a></li>
                    @foreach($navObjs as $navObj)
                        <li class="child-nav">
                            @if($navObj->sections->count() != 0)
                                <a class="" href="#">{{ str_replace('_', ' ',$navObj->page_name) }}</a>
                            @else
                                <a class="" href="{{$navObj->page_d_path}}">{{ str_replace('_', ' ',$navObj->page_name) }}</a>
                            @endif
                            <ul class="sub-menu animate">
                                @foreach($navObj->sections as $section)
                                    <li><a href="{{$section->section_path}}">{{ str_replace('_', ' ',$section->section_name) }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </div>
                <!-- bottom -->
                <div class="bottom">
                    <div class="share">
                        <ul>
                            <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <p>Copyright © 2019 Al Mawashi.<br> All Rights Reserved.</p>
					<p class="content-area"><a href="/terms_&_condition">Terms & Conditions</a> | <a href="/privacy_policy"> Privacy & Policy</a></p>
					</div>
                </div>
            </div>
        </div>
        <!-- end colum right -->
    </div>
</div>
<!-- Mobile -->
<div id="header" class="mobile" style="">
    <div class="container-fluid">
        <div class="row">
            <!-- mobile smart icons -->
            <div class="col-4 align-self-center">
                <ul class="smart-icons text-right p-0">
                    @include('includes.actionbar-links')
                </ul>
            </div>
            <div class="col-8">
                <ul class="menu-right d-flex">
                    <li class="user-login">
                        <a href="#"><i class="flaticon-login"></i> Corporate Login</a>
                    </li>
                    <li class="country d-none">
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/globall.jpg') }}">GLOBAL</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <ul class="tiny_scrolling" id="">
                                    <li><a href="#"><img src="{{ asset('images/uae.jpg') }}">U.A.E</a></li>
                                    <li><a href="#"><img src="{{ asset('images/aus.jpg') }}"> Australia</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="stock flaticon-graph"><span>{{ $stockValue }} KD 
                        @if($stockValue > $preStockValue)
                            <i style="color: lightgreen" >+{{$stockValueDiff}}</i>
                        @elseif($stockValue < $preStockValue)
                            <i style="color: red" >-{{$stockValueDiff}}</i>
                        @else
                            <i style="color: white" >+0.00</i>
                        @endif
                    </span><br>Stock Value</li>
                </ul>
            </div>
        </div>
    </div>

</div>