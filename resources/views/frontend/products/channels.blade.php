<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Almawashi - Our Products</title>
    @include('frontend.head')

</head>

<body class="skin-black fixed">
    <!-- fixed page-->
    <section class=" dark full-height dark bg transparent" style="">
        <!-- menu header-->
         @include('frontend.top-nav')
        <!-- menu header-->
        <!--main content-->
        <div id="main-content" class="products-pages">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-lg-3 col-12">
                        <div class="ul-dropdown">
                            <div class="selected">Channels</div>
                            <ul class="side-nav style-2 p-0">
                                 <li class=""><a href="{{ url ('products') }}">Overview</a> </li>
                                <li class=""><a href="{{ url ('products/live-stock') }}">livestock</a></li>
                                <li><a href="{{ url ('products/processed-products') }}">Processed Products</a></li>
                                <li><a href="{{ url ('products/fresh-cuts') }}">Fresh Cuts</a></li>
                                <li class=""><a href="{{ url ('products/recipies') }}">Recipies</a></li>
                                <li class=""><a href="{{ url ('products/fertilizers') }}">Fertilizers</a></li>
                                <li class=""><a href="{{ url ('products/carcass') }}">Carcass</a></li>
                                <li class=""><a href="{{ url ('products/casing-and-hanks') }}">Casing & Hanks</a></li>
                                <li class=""><a href="{{ url ('products/fodder') }}">Fodder</a></li>
                                <li class="active"><a href="{{ url ('products/channels') }}">Channels</a></li>
                            </ul>
                        </div>
                        <ul class="smart-icons text-left style-2 p-0">
                            @include('includes.actionbar-links')
                        </ul>
                    </div>
                    <!-- end left links -->
                    <!-- right content -->
                    <div class="col-lg-9 col-12">
                        <div class="content-area">
                            <div class="row">
                                <!-- Map -->
                                <div class="col-lg-8 col-12">
                                    <div class="map">
                                        <img src="{{ url ('assests/images/map.png') }}" class="img-full" />
                                    </div>
                                </div>
                                <!-- locations -->
                                <div class="col-lg-4 col-12">
                                    <div class="locations">
                                        <!-- search bar -->
                                        <div class="searchbox">
                                            <div class="input-group md-form form-sm form-2 pl-0">
                                                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                <div class="input-group-append">
                                                    <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- listing -->
                                        <div class="listing">
                                            <ul class="tiny_scrolling">
                                                <li>
                                                    <h3>Al Khaldiya Cooperative Society Dahiya Center</h3>
                                                    <p><strong>Location:</strong> Al Khaldiya</p>
                                                    <p><strong>Address:</strong> 20 St block 4, Khaldiya</p>
                                                    <p><strong>Phone:</strong> 123-456-789</p>
                                                    <a href="#">View On Map</a>
                                                </li>
                                                <li>
                                                    <h3>Al Khaldiya Cooperative Society Dahiya Center</h3>
                                                    <p><strong>Location:</strong> Al Khaldiya</p>
                                                    <p><strong>Address:</strong> 20 St block 4, Khaldiya</p>
                                                    <p><strong>Phone:</strong> 123-456-789</p>
                                                    <a href="#">View On Map</a>
                                                </li>
                                                <li>
                                                    <h3>Al Khaldiya Cooperative Society Dahiya Center</h3>
                                                    <p><strong>Location:</strong> Al Khaldiya</p>
                                                    <p><strong>Address:</strong> 20 St block 4, Khaldiya</p>
                                                    <p><strong>Phone:</strong> 123-456-789</p>
                                                    <a href="#">View On Map</a>
                                                </li>
                                                <li>
                                                    <h3>Al Khaldiya Cooperative Society Dahiya Center</h3>
                                                    <p><strong>Location:</strong> Al Khaldiya</p>
                                                    <p><strong>Address:</strong> 20 St block 4, Khaldiya</p>
                                                    <p><strong>Phone:</strong> 123-456-789</p>
                                                    <a href="#">View On Map</a>
                                                </li>
                                                <li>
                                                    <h3>Al Khaldiya Cooperative Society Dahiya Center</h3>
                                                    <p><strong>Location:</strong> Al Khaldiya</p>
                                                    <p><strong>Address:</strong> 20 St block 4, Khaldiya</p>
                                                    <p><strong>Phone:</strong> 123-456-789</p>
                                                    <a href="#">View On Map</a>
                                                </li>
                                                <li>
                                                    <h3>Al Khaldiya Cooperative Society Dahiya Center</h3>
                                                    <p><strong>Location:</strong> Al Khaldiya</p>
                                                    <p><strong>Address:</strong> 20 St block 4, Khaldiya</p>
                                                    <p><strong>Phone:</strong> 123-456-789</p>
                                                    <a href="#">View On Map</a>
                                                </li>

                                            </ul>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end righ content -->
                    <h1 class="page-title">Our Products</h1>
                </div>
            </div>
        </div>
        <!--main content-->

    </section>
    <!-- end fixed page-->
    @include('frontend.footer-data')
    @include('frontend.footer')