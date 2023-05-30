<?php

namespace Aprendible\FirstPackage\Tests\Unit;

use FirstPackage;
use Aprendible\FirstPackage\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelloTest extends TestCase
{
//    use RefreshDatabase;

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

//    /** @test */
//    function can_interact_with_models_and_databases(){
//        $message = new Message;
//        $message->content= 'Nờ ru';
//        $message->save();
//
//        $this->assertEquals('Nờ ru',Message::first()->content);
//    }

}