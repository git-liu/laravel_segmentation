<?php

namespace PhpSegmentation\Provider;


use Illuminate\Support\ServiceProvider;
use PhpSegmentation\Segmentation\PhpSegmentation;

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
