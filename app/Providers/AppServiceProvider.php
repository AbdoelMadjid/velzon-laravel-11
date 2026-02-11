<?php

namespace App\Providers;

use App\Models\ThemeSetting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;


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

        $themeSettings = ThemeSetting::resolved();
        $locale = Session::get('lang') ?: ($themeSettings['locale'] ?? null);

        if ($locale) {
            App::setLocale($locale);

            if (! Session::has('lang')) {
                Session::put('lang', $locale);
            }
        }

        View::share('themeSettings', $themeSettings);
    }
}
