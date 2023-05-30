<?php


namespace Aprendible\FirstPackage\Tests;


use Aprendible\FirstPackage\Facades\FirstPackage;
use Aprendible\FirstPackage\FirstPackageServiceProvider;
use Aprendible\FirstPackage\RouteServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{

//    protected function getEnvironmentSetUp($app)
//    {
//        $app['config']->set('database.default','testing');
//        $app['config']->set('database.connection.testing',[
//            'drive'=>'sqlite',
//            'database'=>':memory:',
//        ]);
//
//    }


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