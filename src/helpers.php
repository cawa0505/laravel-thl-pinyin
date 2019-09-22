<?php

use THL\Pinyin;

if (!function_exists('pinyin')) {
    /**
     * Get the Pinyin of given string.
     *
     * @param string $string
     * @param string $option
     *
     * @return string
     **/
    function pinyin($string, $option = Pinyin::NONE)
    {
        return app(Pinyin::class)->convert($string, $option);
    }
}

if (!function_exists('pinyin_abbr')) {
    /**
     * Get the fist letters of given string.
     *
     * @param string $string
     * @param string $delimiter
     *
     * @return string
     **/
    function pinyin_abbr($string, $delimiter = '')
    {
        return app(Pinyin::class)->abbr($string, $delimiter);
    }
}

if (!function_exists('pinyin_permalink')) {
    /**
     * Get a pinyin permalink from string.
     *
     * @param string $string
     * @param string $delimiter
     *
     * @return string
     */
    function pinyin_permalink($string, $delimiter = '-')
    {
        return app(Pinyin::class)->permalink($string, $delimiter);
    }
}

if (!function_exists('pinyin_sentence')) {
    /**
     * Get the fist pinyin and letters of given string.
     *
     * @param string $string
     * @param string $tone
     *
     * @return string
     */
    function pinyin_sentence($string, $tone = false)
    {
        return app(Pinyin::class)->sentence($string, $tone);
    }
}
