<?php


namespace Aprendible\FirstPackage\Tests\Unit;


use Aprendible\FirstPackage\Tests\TestCase;

class CanGetTheMessageTest extends TestCase
{
    /** @test */
    function it_returns_the_message(){
        $this->get('hello-test')->assertSuccessful();
    }
}