<?php

namespace PhpAnalysis2\Src\Facade;

use Illuminate\Support\Facades\Facade;

class PhpAnalysis extends Facade{

    protected static function getFacadeAccessor()
    {
        return \PhpAnalysis2\Src\Analysis\PhpAnalysis::class;
    }
}