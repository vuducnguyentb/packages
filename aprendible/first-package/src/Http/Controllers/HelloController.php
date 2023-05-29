<?php

namespace Aprendible\FirstPackage\Http\Controllers;

use Aprendible\FirstPackage\Facades\FirstPackage;

class HelloController
{
    public function index(){
//        return FirstPackage::hello('Nam');
    return view('first-package::home',[
        'message'=>FirstPackage::hello('Mr X')
    ]);
    }
}