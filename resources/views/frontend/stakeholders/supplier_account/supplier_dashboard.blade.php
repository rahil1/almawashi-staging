@extends('frontend.layout')

@section('content')

<body class="skin-light  shareholder" style="background: #fff" onload="switchTabs()">
<!-- <body class="skin-light  shareholder" style="background: #fff" onload="toggleEditAndUpdate()"> -->
    <!-- fixed page-->
    <section class=" dark full-height dark transparent" style="">
        <!-- <div class="owl-carousel owl-theme" id="bgslider">
            <div class="item" style="background:url(assests/images/home-slid1.jpg) ">
            </div>
            <div class="item" style="background:url(assests/images/home-slid2.jpg) ">
            </div>
        </div> -->
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
                            <h2 class="color-theme">Suppliers Dashboard</h2>
							<!-- Tabs -->
							<section id="tabs" class="project-tab" style="margin-top:30px;">
								<nav>
									<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active text-uppercase" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
										<a class="nav-item nav-link text-uppercase" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false">Change Password</a>
										<a class="nav-item nav-link text-uppercase" id="nav-tender-status-tab" data-toggle="tab" href="#nav-tender-status" role="tab" aria-controls="nav-tender-status" aria-selected="false">Tender Status</a>
									</div>
								</nav>
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
										<!-- form -->
										<form class="no-border" style="margin-top:50px;" method="POST" action="{{ route('supplier_update') }}">
											@csrf
											{{ method_field('patch') }}
											<div class="row">
												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>Company Name</label>
													<input name="company_name" disabled="disabled" type="text" value="{{ $authenticated_user->company_name }}" class="form-control @error('company_name') is-invalid @enderror" disabled="disabled">

													@error('company_name')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror
												</div>
												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>Year Established</label>
													<input name="year_established" disabled="disabled" type="text" class="form-control @error('year_established') is-invalid @enderror" value="{{ $authenticated_user->year_est }}" disabled="disabled">

													@error('year_established')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror
												</div>

												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>Business Type</label>
													<input name="business_type" value="{{ $authenticated_user->business_type }}" disabled="disabled" type="text" class="form-control @error('business_type') is-invalid @enderror">

													@error('business_type')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror
												</div>

												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>Trade License Number</label>
													<input name="trn" value="{{ $authenticated_user->trn }}" disabled="disabled" type="text" class="form-control @error('trn') is-invalid @enderror">

													@error('trn')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror
												</div>

												<div class="form-group col-md-3 col-sm-12 dropdown" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-bottom: 30px;">
													<label>Country</label>
													<select name="country" disabled="disabled" class="form-control" id="inputGroupSelect02">
														<option selected value="{{ $authenticated_user->country }}">{{ $authenticated_user->country }}</option>
														@foreach($locations as $location)
			                                                <option value="{{ $location }}">{{ $location }}</option>
			                                            @endforeach
													</select>																
												</div>
												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>City</label>
													<input name="city" disabled="disabled" value="{{ $authenticated_user->city }}" type="text" class="form-control @error('city') is-invalid @enderror">

													@error('city')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror 
												</div>
												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>Contact Number 1</label>
													<input name="phone_1" disabled="disabled" value="{{ $authenticated_user->phone_1 }}" type="text" class="form-control @error('phone_1') is-invalid @enderror">

													@error('phone_1')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror
												</div>

												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>Contact Number 2</label>
													<input name="phone_2" disabled="disabled" value="{{ $authenticated_user->phone_2 }}" type="text" class="form-control @error('phone_2') is-invalid @enderror">

													@error('phone_2')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror
												</div>

												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>Area</label>
													<input name="area" disabled="disabled" value="{{ $authenticated_user->area }}" type="text" class="form-control @error('area') is-invalid @enderror">

													@error('area')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror
												</div>
												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>Building Name / Number</label>
													<input name="address" disabled="disabled" value="{{ $authenticated_user->address }}" type="text" class="form-control @error('address') is-invalid @enderror">

													@error('address')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror
												</div>
												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>Email</label>
													<input id="email" disabled="disabled" value="{{ $authenticated_user->email }}" type="text" class="form-control" placeholder="John@company.com">
												</div>
												<div class="form-group col-md-12 col-sm-12 mt-3">
													<button id="edit_btn" type="submit" class="btn btn-primary" 
													onclick="
														event.preventDefault();
														$('input').each(function(){
															if($(this).attr('id') != $('#email').attr('id'))
															{
													        	$(this).removeAttr('disabled');
															}
													     });
														$('#inputGroupSelect02').removeAttr('disabled');
														$('#update_btn').show();
														$(this).hide();
											     	">Edit Details</button>
													<button id="update_btn" style="display: none" type="submit" 
													onclick="
														$(this).hide();
														$('#edit_btn').show();
													"class="btn btn-primary">Update Details</button>


													<button type="submit" class="btn btn-primary" href="{{ route('logout') }}"
			                                       		onclick="event.preventDefault();
			                                                    document.getElementById('logout-form').submit();">
			                                        		{{ __('Logout') }}
                                    				</button>
												</div>

											</div>
										</form>
										<!-- end form -->
									</div>

									<div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
										<div class="form-group col-md-12 col-sm-12">
                                        </div>
										<h4 style="margin-top:50px;">Change Password</h4>
										@if (session('passwordError'))
                                                <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
                                                    {{ session('passwordError') }} 
                                                </div>
                                            @elseif (session('success'))
                                                <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
                                                    {{ session('success') }}
                                                </div>
                                            @endif
										<!-- form -->
										<form class="no-border" style="margin-top:30px;" method="POST" action="{{ route('supplier_changePassword') }}">
											@csrf
											{{ method_field('patch') }}
											<div class="row">
												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label>Current Password</label>
													<input name="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" placeholder="Enter your existing password">

													@error('current_password')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror
												</div>
												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
			                                        <label for="password">Password</label>
		                                            <input id="password" placeholder="******" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

		                                            @error('password')
		                                                <span class="invalid-feedback" role="alert">
		                                                    <strong>{{ $message }}</strong>
		                                                </span>
		                                            @enderror

												</div>
												<div class="form-group col-md-3 col-sm-12" style="margin-bottom: 30px;">
													<label for="password-confirm">Repeat Password</label>
                                            		<input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
												</div>
												<div class="form-group col-md-12 col-sm-12 mt-3">
													<button type="submit" class="btn btn-primary">Update Password</button>
													<button type="submit" class="btn btn-primary" href="{{ route('logout') }}"
			                                       		onclick="event.preventDefault();
			                                                     document.getElementById('logout-form').submit();">
			                                        		{{ __('Logout') }}
                                    				</button>
												</div>
											</div>
										</form>
										<!-- end form -->

										<!-- Logout form -->
	                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                        @csrf
	                                    </form>
	                                    <!-- end logout form -->

									</div>
									<div class="tab-pane fade" id="nav-tender-status" role="tabpanel" aria-labelledby="nav-tender-status-tab">
										<table class="table" cellspacing="0">
											<thead class="text-uppercase">
												<tr>
													<th>Approved</th>
													<th>Pending</th>
													<th>Rejected</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<table>
																@foreach($approvedUserTenders as $approvedUserTender)
																	<tr><td>{{ $approvedUserTender->getTenderTitle() }}</td></tr>
																@endforeach
														</table>	
													</td>
													<td>
														<table>
																@foreach($pendingUserTenders as $pendingUserTenders)
																	<tr><td>{{ $pendingUserTenders->getTenderTitle() }}</td></tr>
																@endforeach
														</table>	
													</td>
													<td>
														<table>
																@foreach($regectedUserTenders as $regectedUserTenders)
																	<tr><td>{{ $regectedUserTenders->getTenderTitle() }}</td></tr>
																@endforeach
														</table>	
													</td>
												</tr>
											</tbody>
										</table>
										<form class="no-border" style="margin-top:30px;">
											<div class="form-group col-md-12 col-sm-12 mt-3">	
												<button type="submit" class="btn btn-primary" href="{{ route('logout') }}"
		                                       		onclick="event.preventDefault();
		                                                     document.getElementById('logout-form').submit();">
		                                        		{{ __('Logout') }}
                                				</button>
											</div>
										</form>
									</div>
								</div>
							</section>
							<!--/ Tabs -->
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
    @section('title','Almawashi | Stakeholders | Suppliers Dashboard')