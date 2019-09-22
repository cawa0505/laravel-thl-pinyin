<?php

namespace THL\LaravelPinyin\Macros;

use THL\Pinyin;

class StrMacros
{
    /**
     * Replace a value in the request object.
     *
     * @param string|integer $key
     * @param mixed $value
     * @return self
     */
    public function pinyin()
    {
        return function (string $str) {
            return Pinyin::pinyin($str);
        };
    }

    /**
     * Replace a value in the request object.
     *
     * @param string|integer $key
     * @param mixed $value
     * @return self
     */
    public function pinyinSlug()
    {
        return function (string $str) {
            return Pinyin::slug($str);
        };
    }

    /**
     * Replace a value in the request object.
     *
     * @param string|integer $key
     * @param mixed $value
     * @return self
     */
    public function bpmf()
    {
        return function (string $str) {
            return Pinyin::bpmf($str);
        };
    }
}
