<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Suppliertender;
use App\Models\Tender;
use Hash;
use App\Traits\CountryTrait;


class SupplierController extends Controller
{
    use CountryTrait;

    public function showTenderLoginForm()
    {
        if(!auth()->check()){
            return view('auth.login');
        }
        return redirect()->route('open_tenders');
    }
    public function returnSupplierDashboard()
    {
        $authenticated_user = auth()->user();
        // $locations = Location::where('country', "!=", $authenticated_user->country)->get();
        $locations = $this->returnCountryArray();
        
        $approvedUserTenders = Suppliertender::where('fk_user_id' , $authenticated_user->id)->where('status', 1)->get();
        // dd($approvedUserTenders);


        $pendingUserTenders = Suppliertender::where('fk_user_id' , $authenticated_user->id)->where('status', 2)->get();
        // dd($pendingUserTenders);

        $regectedUserTenders = Suppliertender::where('fk_user_id' , $authenticated_user->id)->where('status', 3)->get();
        // dd($regectedUserTenders);


        return view('frontend.stakeholders.supplier_account.supplier_dashboard')->with([
            'authenticated_user' => $authenticated_user,
            'locations' => $locations,
            'approvedUserTenders' => $approvedUserTenders,
            'pendingUserTenders' => $pendingUserTenders,
            'regectedUserTenders' => $regectedUserTenders,
        ]);
    }

    public function createSupplierTender(Request $request, $tender_code)
    {
        $authenticated_user = auth()->user();
        $tender_id = Tender::where('tender_code', $tender_code)->value('tender_id');
        // dd($authenticated_user->id);

        $request->validate([
            'quantity' => 'required|numeric|min:1',
            'unit' => 'required|string|max:15',
            'spec' => 'required|string|max:50',
            'unit_price' => 'required|numeric|min:1',
        ]);

        $supplierTender = [
            'quantity' => $request->input('quantity'),
            'unit' => $request->input('unit'),
            'spec' => $request->input('spec'),
            'unit_price' => $request->input('unit_price'),
            'fk_user_id' => $authenticated_user->id, 
            'fk_tender_id' => $tender_id,
        ];
        // dd($supplierTender);

        // try 
        // {
        //     Suppliertender::create($supplierTender);
        //     return response()->json([
        //         'status' => true,
        //     ]);

        // }
        // catch (\Exception $e) { // I don't remember what exception it is specifically

        //     // return response()->json([
        //     //     'status' => false,
        //     // ]);
        //     return $e;
        // }

        try 
        {
            Suppliertender::create($supplierTender);
            return back()->with('status', 'Tender registered successfully!');

        }
        catch (\Exception $e) { // I don't remember what exception it is specifically
            
            if($e instanceof \PDOException)
            {
                return back()->with('statusExist', 'You have already registered for this tender.');
            }
            else
            {
                return back()->with('statusExist', 'We could not register your tender information. Please try again later or ');
            }
        }

    }

    public function updateUserAccount(Request $request)
    {
    	$authenticated_user = auth()->user();

    	$request->validate([
	        'company_name' => 'required|string|max:50',
	        'year_established' => 'required|numeric|min:1000|max:2999|digits:4',
	        'business_type' => 'required|string|max:50',
	        'trn' => 'required|alpha_num|max:50',
	        'country' => 'required|string|filled',
	        'city' => 'required|string|max:50',
            'phone_1' => 'required|numeric',
            'phone_2' => 'required|numeric',
            'area' => 'required|string|max:100',
            'address' => 'required|string|max:150',
       	]);

    	$authenticated_user->company_name = $request->input('company_name');
    	$authenticated_user->year_est = $request->input('year_established');
    	$authenticated_user->business_type = $request->input('business_type');
    	$authenticated_user->country = $request->input('country');
    	$authenticated_user->trn = $request->input('trn');
    	$authenticated_user->city = $request->input('city');
    	$authenticated_user->phone_1 = $request->input('phone_1');
    	$authenticated_user->phone_2 = $request->input('phone_2');
    	$authenticated_user->area = $request->input('area');
    	$authenticated_user->address = $request->input('address');

    	$authenticated_user->save();
    	return back();
    }

    public function changePassword(Request $request)
    {
    	$authenticated_user = auth()->user();
        // dd($authenticated_user->id);

        if (!(Hash::check($request->get('current_password'), $authenticated_user->password))) {
            // The passwords matches
            return redirect()->back()->with("passwordError","Your current password does not match with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current_password'), $request->get('password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("passwordError","New Password cannot be same as your current password. Please choose a different password.");
        }

    	$request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);


        //Change Password
        $authenticated_user->password = bcrypt($request->get('password'));
        $authenticated_user->save();
        return redirect()->back()->with("success","Password changed successfully!");
    }
}
