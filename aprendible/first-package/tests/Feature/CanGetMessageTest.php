<?php

namespace Aprendible\FirstPackage\Tests\Feature;

use Aprendible\FirstPackage\Tests\TestCase;

class CanGetMessageTest extends TestCase
{
    /** @test */
    function can_get_message(){
        $this->withoutExceptionHandling();
        $this->get('hello-test')->assertSee("Hola Holu");
    }
}