<?php

namespace PhpSegmentation\Src\Facade;

use Illuminate\Support\Facades\Facade;

class PhpSegmentation extends Facade{

    protected static function getFacadeAccessor()
    {
        return \PhpSegmentation\Src\Segmentation\PhpSegmentation::class;
    }
}