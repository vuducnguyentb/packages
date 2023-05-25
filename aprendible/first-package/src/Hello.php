<?php

namespace Aprendible\FirstPackage;

class Hello
{
    private $name;

    public function __construct($name = 'An')
    {
        $this->name = $name;
    }

    public function hello()
    {
        return "Hello, {$this->name}";
    }
}