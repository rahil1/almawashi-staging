<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) 
        {
            if(url()->previous() == url('open_tenders')){
                return route('open_tenders_login');
            }
            else{
                return route('stakeholders', 'suppliers');
            }
        }
    }
}
