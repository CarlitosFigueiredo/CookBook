<?php

namespace App\Providers;

use App\Models\Announcement;
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
        view()->composer('components.layout', function ($view) {
            $announcement = Announcement::first();
            $view->with([
                'bannerText' => $announcement->bannerText,
                'bannerColor' => $announcement->bannerColor,
                'isActive' => $announcement->isActive,
            ]);
        });
    }
}
