<?php

use Aprendible\FirstPackage\Facades\FirstPackage;
use Illuminate\Support\Facades\Route;

Route::get("hello-test",function (){
    return FirstPackage::hello("Me");
});