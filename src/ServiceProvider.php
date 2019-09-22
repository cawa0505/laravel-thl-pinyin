<?php

/**
 * This file is part of the cawa0505/laravel-thl-pinyin.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace THL\LaravelPinyin;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use THL\Pinyin;
use Illuminate\Support\Str;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the provider.
     */
    public function register()
    {
        $this->app->singleton(Pinyin::class, function ($app) {
            return new Pinyin();
        });

        $this->app->alias(Pinyin::class, 'pinyin');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Pinyin::class, 'pinyin'];
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Str::macro('pinyin', function ($str) {
            return Pinyin::pinyin($str);
        });

        Str::macro('pinyin-slug', function ($str) {
            return Pinyin::slug($str);
        });
    }
}
