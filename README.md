# Laravel-thl-pinyin

Romanization tool for Traditional Chinese in Laravel5 / Lumen based on [thl/pinyin](https://github.com/thl-pinyin/php-thl-pinyin).

[![Latest Stable Version](https://poser.pugx.org/cawa0505/laravel-thl-pinyin/v/stable.svg)](https://packagist.org/packages/cawa0505/laravel-thl-pinyin) [![Total Downloads](https://poser.pugx.org/cawa0505/laravel-thl-pinyin/downloads.svg)](https://packagist.org/packages/overtrue/laravel-pinyin) [![Latest Unstable Version](https://poser.pugx.org/cawa0505/laravel-thl-pinyin/v/unstable.svg)](https://packagist.org/packages/overtrue/laravel-pinyin) [![License](https://poser.pugx.org/cawa0505/laravel-thl-pinyin/license.svg)](https://packagist.org/packages/overtrue/laravel-pinyin)

## Install

```shell
composer require "overtrue/laravel-pinyin"
```

## For Laravel if don't discover

Add the following line to the section `providers` of `config/app.php`:

```php
'providers' => [
    //...
    THL\LaravelPinyin\ServiceProvider::class,
],
```

as optional, you can use facade:

```php

'aliases' => [
    //...
    'Pinyin' => THL\LaravelPinyin\Facades\Pinyin::class,
],
```

## For Lumen

Add the following line to `bootstrap/app.php` after `// $app->withEloquent();`

```php
...
// $app->withEloquent();

$app->register(THL\LaravelPinyin\ServiceProvider::class);
...
```

## Usage

you can get the instance of `THL\Pinyin` from app container:

```php

$pinyin = app('pinyin');
echo $pinyin->bpmf('THL台灣華語羅馬拼音');
// returns "THL ㄊㄞˊ ㄨㄢ ㄏㄨㄚˊ ㄩˇ ㄌㄨㄛˊ ㄇㄚˇ ㄆㄧㄣ ㄧㄣ"
```

There are more convenient functions:

|  function      | method                                                |
| -------------  | --------------------------------------------------- |
| `pinyin()`     | `app('pinyin')->pinyin()`                              |
| `pinyin_bpmf()`     | `app('pinyin')->bpmf()`                                        |
| `pinyin_slug` | `app('pinyin')->slug()`                         |

```php
pinyin('THL台灣華語羅馬拼音');
// returns "THL tai2 wan1 hua2 yu3 luo2 ma3 pin1 yin1"

pinyin_bpmf('THL台灣華語羅馬拼音');
// returns "THL ㄊㄞˊ ㄨㄢ ㄏㄨㄚˊ ㄩˇ ㄌㄨㄛˊ ㄇㄚˇ ㄆㄧㄣ ㄧㄣ"
...
```

Using facade:

```php
use THL\LaravelPinyin\Facades\Pinyin;

Pinyin::pinyin('THL台灣華語羅馬拼音');
// returns "THL tai2 wan1 hua2 yu3 luo2 ma3 pin1 yin1"

Pinyin::slug('THL台灣華語羅馬拼音');
// returns "thl-tai-wan-hua-yu-luo-ma-pin-yin"

```

About `thl/pinyin` specific configuration and use, refer to: [thl/pinyin](https://github.com/thl-pinyin/php-thl-pinyin)


## License

MIT
