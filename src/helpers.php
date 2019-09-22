<?php

/**
 * This file is part of the cawa0505/laravel-thl-pinyin.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use THL\Pinyin;

if (!function_exists('pinyin')) {
    /**
     * Get a pinyin slug from string.
     *
     * @param string $string
     * @param string $notation
     * @param string $tone
     * @param string $split
     *
     * @return string
     */
    function pinyin(
        $string,
        $notation = 'thl',
        $tone = 'number',
        $split = 'word'
    ) {
        return app(Pinyin::class)->pinyin($string, [
            'notation' => $notation,
            'tone' => $tone,
            'split' => $split,
        ]);
    }
}

if (!function_exists('pinyin_slug')) {
    /**
     * Get a pinyin slug from string.
     *
     * @param string $string
     * @param string $notation
     * @param string $tone
     * @param string $split
     *
     * @return string
     */
    function pinyin_slug(
        $string,
        $notation = 'thl',
        $tone = 'number',
        $split = 'word'
    ) {
        return app(Pinyin::class)->slug($string, [
            'notation' => $notation,
            'tone' => $tone,
            'split' => $split,
        ]);
    }
}

if (!function_exists('bpmf')) {
    /**
     * Get a bopomofo from string.
     *
     * @param string $string
     *
     * @return string
     */
    function bpmf($string)
    {
        return app(Pinyin::class)->bpmf($string);
    }
}
