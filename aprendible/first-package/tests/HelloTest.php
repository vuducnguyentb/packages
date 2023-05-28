<?php


namespace Aprendible\FirstPackage\Tests;

use FirstPackage;

class HelloTest extends TestCase
{



    /** @test */
    function it_returns_the_message(){
        $this->assertEquals(
            "Maii Anh",
            FirstPackage::hello("Mai")
        );
        $this->assertEquals(
            "Kim Đan",
            FirstPackage::hello("Đan")
        );
    }
}