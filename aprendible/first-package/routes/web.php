<?php

use Aprendible\FirstPackage\Facades\FirstPackage;
use Illuminate\Support\Facades\Route;

Route::get('hello-test','HelloController@index');

//Route::get("hello-test",['Aprendible\FirstPackage\Http\Controllers\HelloController',"index"]);

//Route::namespace('Aprendible\FirstPackage\Http\Controllers')->group(function(){
//    Route::get('hello-test','HelloController@index');
//});