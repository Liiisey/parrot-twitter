<?php

namespace App\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Return data in every view, accessible with $whoToFollow
        $whoToFollow = File::json(public_path('json/who-to-follow.json'), JSON_THROW_ON_ERROR);
        view()->share(compact('whoToFollow'));
    }
}
