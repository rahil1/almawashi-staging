@extends('frontend.layout')

@section('content')

<body class="skin-light fixed black-heading" style="background: url(images/Recipe-BG.png) #eaeaea">
    <!-- fixed page-->
    <section class=" light full-height transparent">
        <!-- menu header-->
        @include('includes.top-nav')
        <!-- menu header-->
        <!--main content-->
        <div id="main-content">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-md-12 col-sm-12">
                        <div class="content-area">
                            <h2 class="mb-3 lato-black">Today’s Recipe</h2>

                            <h6 class="sub-heading mb-3 font-28 lato">How To Make {{ $today_recipe->first()->recipe_title }} Like a Pro</h6>
                            <div class="row">
                                <!-- sub content -->
                                <div class="col-lg-6 col-md-12">
                                    <!-- Video -->
                                    <div class="video mb-3">
                                        <!-- <iframe width="" height="360" src="https://www.youtube.com/embed/KEBh8dSHckE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                        <img src="{{ $today_recipe->first()->recipe_image != null ? url()->assetFrom(config('externalAssets.ext_asset_link'), $today_recipe->first()->recipe_image) : ($today_recipe->first()->recipe_video != null ? json_decode($today_recipe->first()->recipe_video)->image : '') }}" class="img-full" /></a>
                                    </div>
                                    <div class="description">
                                        <h6 class="sub-heading lato-black font-18">Cooking Instructions:</h6>
                                        {!! $today_recipe->first()->recipe_method !!}
                                    </div>
                                </div>
                                <!-- end sub content -->
                                <!-- INGREDIENTS -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="ing-items">
                                        <h6 class="sub-heading lato-black font-18">INGREDIENTS: </h6>
                                        <ul>
                                            <!-- <li>Beef 1kg</li>
                                            <li>Yoghurt 1kg</li>
                                            <li>Beef 1kg</li>
                                            <li>Yoghurt 1kg</li>
                                            <li>Beef 1kg</li>
                                            <li>Yoghurt 1kg</li>
                                            <li>Beef 1kg</li>
                                            <li>Yoghurt 1kg</li>
                                            <li>Beef 1kg</li>
                                            <li>Yoghurt 1kg</li>
                                            <li>Beef 1kg</li>
                                            <li>Yoghurt 1kg</li>
                                            <li>Beef 1kg</li>
                                            <li>Yoghurt 1kg</li> -->

                                            {!! $today_recipe->first()->recipe_ingredients !!}
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12">
                                    <ul class="smart-icons text-right p-0 mt-5">
                                        @include('includes.actionbar-links')   
                                    </ul>
                                </div>
                                <!-- END INGREDIENTS -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--main content-->

    </section>
    <!-- end fixed page-->
    @include('includes.footer-data')
    @endsection
    @section('title',"Almawashi | Today's Recipe") 