<?php

namespace App\Providers;

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
        $listCard = config('comics_db.listCards');
        $mainlists = config('comics_db.mainlists');
        $iconimgs = config('comics_db.iconimgs');
        view()->share(compact('listCard', 'mainlists', 'iconimgs'));
    }
}
