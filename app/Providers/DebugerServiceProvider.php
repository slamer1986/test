<?php

namespace App\Providers;

use App\Debuger;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class DebugerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
	    App::bind('debuger', function()
	    {
		    return Debuger::class;
	    });
    }
}
