<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@returnWelcomeView');


//News and Media Pages 
Route::get('/news_&_media/news-single-story/{id}', 'PagesController@returnReadMoreView')->name('read_more');
Route::get('/news_&_media/{section_name}', 'PagesController@returnNewsAndMediaView');


//Products
Route::get('/products/{section_name}', 'PagesController@returnProductView');

//Contact US
Route::get('/contact_us', 'PagesController@returnLocationsView');

//About Us
Route::get('/about_us/{section_name}', 'PagesController@returnAboutUsView');

//Services
Route::get('/services/{section_name}', 'PagesController@returnServicesView');

//Our Quality
Route::get('/our_quality/{section_name}', 'PagesController@returnQualityView');

//stakeholders
Route::get('/stakeholders/{section_name}', 'PagesController@returnStakeholderView')->name('stakeholders');

//Route to downloading reports
Route::get('stakeholders/reports/{id}', 'PagesController@downloadReport')->name('downloadReport');

// Our Branches
Route::get('/our_branches/branches', 'PagesController@returnBranchesView');
Route::get('/our_branches/sales_outlets/{id}', 'PagesController@returnOutletsView')->name('sales_outlets');

//Today Recipe
Route::get('/today_recipe', 'PagesController@returnTodayRecipeView');


Auth::routes(['verify' => true]);

Route::get('/supplier_account/supplier_dashboard', 'SupplierController@returnSupplierDashboard')->name('supplier_dashboard')->middleware('verified');
Route::patch('/supplier_account/update', 'SupplierController@updateUserAccount')->name('supplier_update')->middleware('verified');
Route::patch('/supplier_account/changepassword', 'SupplierController@changePassword')->name('supplier_changePassword')->middleware('verified');

Route::get('/open_tenders_login', 'SupplierController@showTenderLoginForm')->name('open_tenders_login');
Route::patch('/create_supplier_tender/{tender_code}', 'SupplierController@createSupplierTender')->name('create_supplier_tender')->middleware('verified');



//Smart Icons
Route::get('/open_tenders', 'PagesController@returnTendersView')->name('open_tenders');

Route::get('/tender_form/{form_code}', 'PagesController@showTenderForm')->name('tender_form')->middleware('verified');

Route::get('/request_quote', 'PagesController@returnRequestQuoteView');

Route::post('/request_quote_fetch', 'PagesController@fetchProductsFromSections')->name('request_quote_fetch');

Route::get('/careers_hub', 'PagesController@returnCareerView');

Route::get('/apply_now/{career_id}', 'PagesController@returnCareerApplyView')->name('apply_now');

Route::get('/submit_job/{career_id}', 'PagesController@returnCareerSubmitView')->name('submit_job');


//Terms&Condition and Policy
Route::get('/terms_&_condition', function () {
   return view('frontend.terms_conditions');
});

Route::get('/privacy_policy', function () {
   return view('frontend.privacy_policy');
});



