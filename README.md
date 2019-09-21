# Laravel-thl-pinyin

Romanization tool for Traditional Chinese in Laravel5 / Lumen based on [thl/pinyin](https://github.com/thl-pinyin/php-thl-pinyin).

[![Latest Stable Version](https://poser.pugx.org/cawa0505/laravel-thl-pinyin/v/stable.svg)](https://packagist.org/packages/cawa0505/laravel-thl-pinyin) [![Total Downloads](https://poser.pugx.org/cawa0505/laravel-thl-pinyin/downloads.svg)](https://packagist.org/packages/overtrue/laravel-pinyin) [![Latest Unstable Version](https://poser.pugx.org/cawa0505/laravel-thl-pinyin/v/unstable.svg)](https://packagist.org/packages/overtrue/laravel-pinyin) [![License](https://poser.pugx.org/cawa0505/laravel-thl-pinyin/license.svg)](https://packagist.org/packages/overtrue/laravel-pinyin)

## Install

```shell
composer require "overtrue/laravel-pinyin"
```

## For Laravel under 5.5

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
echo $pinyin->bpmf("THL台灣華語羅馬拼音");
// returns "THL ㄊㄞˊ ㄨㄢ ㄏㄨㄚˊ ㄩˇ ㄌㄨㄛˊ ㄇㄚˇ ㄆㄧㄣ ㄧㄣ"
```

There are more convenient functions:

|  function      | method                                                |
| -------------  | --------------------------------------------------- |
| `pinyin()`     | `app('pinyin')->convert()`                              |
| `pinyin_abbr()`     | `app('pinyin')->abbr()`                                        |
| `pinyin_permalink` | `app('pinyin')->permalink()`                         |
| `pinyin_sentence` | `app('pinyin')->sentence()`                         |

```php
var_dump(pinyin('带着希望去旅行，比到达终点更美好'));
// ["dai", "zhe", "xi", "wang", "qu", "lv", "xing", "bi", "dao", "da", "zhong", "dian", "geng", "mei", "hao"]

var_dump(pinyin_abbr('带着希望去旅行'));
// dzxwqlx
...
```

Using facade:

```php
use Pinyin; // Facade class, NOT Overtrue\Pinyin\Pinyin

var_dump(Pinyin::convert('带着希望去旅行'));
// ["dai", "zhe", "xi", "wang", "qu", "lv", "xing"]

echo Pinyin::sentence('带着希望去旅行，比到达终点更美好');
// dài zhe xī wàng qù lǔ xíng, bǐ dào dá zhōng diǎn gèng měi hǎo

```

About `thl/pinyin` specific configuration and use, refer to: [thl/pinyin](https://github.com/thl-pinyin/php-thl-pinyin)


## License

MIT
