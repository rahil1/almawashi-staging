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

                                        </div>
                                    </div>
                                    
                                    @include('frontend.stakeholders.reports')

                                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="Disclosure">
                                        <div class="content-area ">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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