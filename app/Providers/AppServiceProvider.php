<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        Schema::defaultStringLength(191);

        view()->composer('layouts.aside', function ($view) {
            $view->with('tagsCloud', \App\Tag::all());
        });

        view()->composer('layouts.aside', function ($view) {
            $view->with('bibleQuote', \App\Bible_quote::all()->random());
        });
    }
}
