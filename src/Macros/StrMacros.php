<?php

namespace THL\LaravelPinyin\Macros;

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
            return pinyin($str);
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
            return pinyin_slug($str);
        };
    }
}
