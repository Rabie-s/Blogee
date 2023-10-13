<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Setting;

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
        View::composer(['blog.layouts.nav_bar'],function($view){
            $view->with('categories',Category::all());
        });

        View::composer('*',function($view){
            $view->with('siteSettings',Setting::find(1));
        });
    }
}
