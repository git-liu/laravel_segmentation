<?php

namespace PhpAnalysis2\Src\Provider;


use Illuminate\Support\ServiceProvider;
use PhpAnalysis2\Src\Analysis\PhpAnalysis;

class PhpAnalysisProvider extends ServiceProvider{

    protected $defer = true;

    public function boot(){

    }

    public function register(){
        $this->app->singleton(PhpAnalysis::class,function (){
            return new PhpAnalysis();
        });
    }
}