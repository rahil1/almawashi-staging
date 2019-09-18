@extends('frontend.layout')

@section('content')

<body class="skin-light fixed shareholder" style="background: #fff">
    <!-- fixed page-->
    <section class=" dark full-height dark transparent" style="">
        <div class="owl-carousel owl-theme" id="bgslider">
            <!-- <div class="item" style="background:url('{{ asset('images/home-slid1.jpg') }}')"></div>
            <div class="item" style="background:url('{{ asset('images/home-slid2.jpg') }}') "></div> -->
        </div>
        <!-- menu header-->
        @include('includes.top-nav')
        <!-- menu header-->
        <!--main content-->
        <div id="main-content" class="products-pages">
            <div class="container-fluid h-100 pr-lg-0">
                <div class="row h-100">
                    <!-- left links -->
                    <div class="col-lg-5 col-12 ">
                        <div class="ul-dropdown">
                            <div class="selected">Shareholders</div>
                            <ul class="side-nav style-dropdown p-0">
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
                    <div class="col-lg-7 col-12 pr-lg-0 ">
                        <div class="content-area">
                            <h2 class="color-theme">Shareholders</h2>
                            <div class="tabs almawashi">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="shareholders" data-toggle="tab" href="#tab-shareholders" role="tab" aria-controls="shareholders" aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="report" data-toggle="tab" href="#tab-one" role="tab" aria-controls="report" aria-selected="true">Report</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Disclosure" data-toggle="tab" href="#tab-two" role="tab" aria-controls="profile" aria-selected="false">Disclosure</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" id="stock-value" data-toggle="tab" href="#tab-three" role="tab" aria-controls="contact" aria-selected="false"> Stock Value</a>
                                    </li> -->
                                </ul>
                                <div class="tab-content mt-4" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tab-shareholders" role="tabpanel" aria-labelledby="shareholders">
                                        <!-- <div class="owl-carousel owl-theme scroll shareholders box-shadow">
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
                                        </div> -->
                                        <div class="content-area ">
                                            <h5>Shareholders</h5>
                                            <p>These are the people who are aware of the company’s values and seek out ways to meet the company’s profitability objectives. Al Mawashi is always at the forefront to deliver high-quality services at competitive prices while offering its shareholders a superior and sustained return on their investment.</p>

                                            <h5>Corporate Social responsibility</h5>
                                            <p>Al Mawashi Have been & always a contributor to the social scene. We participated in many projects that contribute to people life like Eid Al Adha sacrifice slaughter services through our App & helping Charity organization by providing sacrifices with a lower cost. participating in KidZania to show the kids our daily operation & letting them learn about livestock farming & shipping.</p>

                                            <img src="{{ asset('images/stackehlders2.jpg') }}" class="" />
                                        </div>
                                    </div>

                                    @include('frontend.stakeholders.reports')

                                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="Disclosure">
                                        <div class="content-area ">
                                            <!-- reports -->
                                            <div class="content-area">
                                                <div class="filters">
                                                    <span>Select the year:</span>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2019</button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">2020</a>
                                                            <a class="dropdown-item" href="#">2021</a>
                                                            <a class="dropdown-item" href="#">2023</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="report">
                                                    @for ($i = 0; $i < 10; $i++) <!-- item -->
                                                        <li class="single-report">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="icon">
                                                                    <div class="report">
                                                                        <h3 class="lato-bold font-16 color-dark mb-2">Al Mawashi reported a profit of KD 3.5 million for the 9 months ended 30-09-20</h3>
                                                                        <p>Date: September 30, 2015</p>
                                                                        <ul class="btsn">
                                                                            <li><a href="#pdf" class="btn default">Download Report</a></li>
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- item -->
                                                        @endfor
                                                </ul>
                                            </div>
                                            <!-- reports -->
                                        </div>
                                    </div>
                                    <!-- <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="stock-value">
                                        <div class="content">
                                            <div class="content-area ">
                                                <h2 class="font-32 color-dark text-capitalize lato">Please confirm the content type</h2>
                                            </div>

                                        </div>
                                    </div> -->
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
    @section('title','Almawashi | Stakeholders | Shareholders')