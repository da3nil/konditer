<?php

namespace App\Providers;

use App\Models\ShopOrder;
use App\Models\ShopOrderPosition;
use App\Observers\ShopOrderObserver;
use App\Observers\ShopOrderPositionObserver;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
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
        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ShopOrderPosition::observe(ShopOrderPositionObserver::class);
        ShopOrder::observe(ShopOrderObserver::class);
    }
}
