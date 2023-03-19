<?php

namespace App\Providers;

use App\Models\Footer;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'layouts.footer',
            function ($view) {
                $view->with('footersend',Footer::where('status','0')->get());
            }
        );
    }
}
