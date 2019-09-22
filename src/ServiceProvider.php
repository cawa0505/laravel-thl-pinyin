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
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        if (Str::hasMacro('pinyin') || Str::hasMacro('pinyinSlug')) {
            return;
        }

        Str::macro('pinyin', function (string $str) {
            return Pinyin::pinyin($str);
        });

        Str::macro('pinyinSlug', function (string $str) {
            return Pinyin::slug($str);
        });
    }

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
}
