<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            [
                'frontend.partials.header',
                'backend.partials.left-sidebar',
                'frontend.partials.footer',
                'frontend.contact',
            ],
            'App\View\Composers\FrontendComposer'
        );
    }
}
