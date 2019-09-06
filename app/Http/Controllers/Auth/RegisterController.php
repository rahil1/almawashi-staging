<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/supplier_account/supplier_dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'company_name' => ['required', 'string', 'max:50'],
            'year_established' => ['required', 'numeric', 'min:1000', 'max:2999', 'digits:4'],
            'business_type' => ['required', 'string', 'max:50'],
            'trn' => ['required', 'alpha_num', 'max:50'],
            'country' => ['required', 'string','filled'],
            'city' => ['required', 'string', 'max:50'],
            'phone_1' => ['required', 'numeric'],
            'phone_2' => ['required', 'numeric'],
            'area' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:150'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'company_name' => $data['company_name'],
            'year_est' => $data['year_established'],
            'business_type' => $data['business_type'],
            'trn' => $data['trn'],
            'country' => $data['country'],
            'city' => $data['city'],
            'phone_1' => $data['phone_1'],
            'phone_2' => $data['phone_2'],
            'area' => $data['area'],
            'address' => $data['address'],

        ]);
    }
}
