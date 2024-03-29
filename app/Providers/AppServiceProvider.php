<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::defaultStringLength(191);
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
   /* public function boot()
    {
        //
    }*/
}
