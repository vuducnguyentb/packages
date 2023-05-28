<?php


namespace Aprendible\FirstPackage\Tests;


use Aprendible\FirstPackage\Facades\FirstPackage;
use Aprendible\FirstPackage\FirstPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return[
            FirstPackageServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return[
            "FirstPackage"=> FirstPackage::class
        ];
    }

}