<?php
// Author: @ecodeblog
// Date: 20-09-2019
namespace App\Providers;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider; // Don't forget to add this @ecodeblog

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
    public function boot(){
        Schema::defaultStringLength(191); // You may need to add this lines to your boot().  @ecodeblog
    }
}
