<?php

namespace PhpSegmentation\Src\Provider;


use Illuminate\Support\ServiceProvider;
use PhpSegmentation\Src\Segmentation\PhpSegmentation;

class PhpSegmentationProvider extends ServiceProvider{

    protected $defer = true;

    public function boot(){

    }

    public function register(){
        $this->app->singleton(PhpSegmentation::class,function (){
            return new PhpSegmentation();
        });
    }
}