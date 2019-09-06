<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ActionBarProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->actionBarComposer();
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

    public function actionBarComposer()
    {
        view()->composer('includes.actionbar-links' , 'App\Http\ViewComposers\ActionBarComposer@compose');
    }
}
