<?php


namespace Aprendible\FirstPackage\Tests;


use Aprendible\FirstPackage\Facades\FirstPackage;
use Aprendible\FirstPackage\FirstPackageServiceProvider;
use Aprendible\FirstPackage\RouteServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return[
            FirstPackageServiceProvider::class,
            RouteServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return[
            "FirstPackage"=> FirstPackage::class
        ];
    }

}