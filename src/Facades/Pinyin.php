<?php

/*
 * This file is part of the cawa0505/laravel-pinyin.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace THL\LaravelPinyin\Facades;

use Illuminate\Support\Facades\Facade;
use THL\Pinyin\Pinyin as Accessor;

class Pinyin extends Facade
{
    public static function getFacadeAccessor()
    {
        return Accessor::class;
    }
}
