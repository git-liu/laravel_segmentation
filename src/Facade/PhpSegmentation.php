<?php

namespace PhpSegmentation\Facade;

use Illuminate\Support\Facades\Facade;

class PhpSegmentation extends Facade{

    protected static function getFacadeAccessor()
    {
        return \PhpSegmentation\Segmentation\PhpSegmentation::class;
    }
}
