<?php

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

if (!function_exists('pinyin_bpmf')) {
    /**
     * Get a bopomofo from string.
     *
     * @param string $string
     *
     * @return string
     */
    function pinyin_bpmf($string)
    {
        return app(Pinyin::class)->bpmf($string);
    }
}
