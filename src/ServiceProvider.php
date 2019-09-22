<?php

/**
 * This file is part of the cawa0505/laravel-thl-pinyin.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace THL\LaravelPinyin;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Illuminate\Support\Str;
use THL\LaravelPinyin\Macros\StrMacros;

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
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Str::mixin(new StrMacros);
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
