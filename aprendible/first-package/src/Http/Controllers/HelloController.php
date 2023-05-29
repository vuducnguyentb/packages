<?php

namespace Aprendible\FirstPackage\Http\Controllers;

use Aprendible\FirstPackage\Facades\FirstPackage;

class HelloController
{
    public function index(){
        return FirstPackage::hello('Nam');
    }
}