<?php


namespace Aprendible\FirstPackage\Tests;


use FirstPackage;
use Aprendible\FirstPackage\FirstPackageServiceProvider;
use Orchestra\Testbench\TestCase;

class HelloTest extends TestCase
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
            "FirstPackage"=> \Aprendible\FirstPackage\Facades\FirstPackage::class
        ];
    }

    /** @test */
    function it_returns_the_message(){
        $this->assertEquals(
            "hello lala",
            FirstPackage::hello()
        );
    }
}