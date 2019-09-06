<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TopNavProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->TopNavComposer();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function TopNavComposer()
    {
        view()->composer('includes.top-nav' , 'App\Http\ViewComposers\TopNavComposer@compose');
    }
}
