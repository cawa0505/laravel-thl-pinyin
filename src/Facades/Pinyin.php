<?php

/**
 * This file is part of the cawa0505/laravel-pinyin.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace THL\LaravelPinyin\Facades;

use Illuminate\Support\Facades\Facade;

class Pinyin extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-thl-pinyin';
    }
}
