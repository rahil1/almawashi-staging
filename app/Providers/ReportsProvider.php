<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ReportsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->reportsComposer();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->reportsComposer();
    }


    public function reportsComposer()
    {
        view()->composer('frontend.stakeholders.reports' , 'App\Http\ViewComposers\ReportsComposer@compose');
    }
}