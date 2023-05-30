<?php

use Aprendible\FirstPackage\Facades\FirstPackage;
use Illuminate\Support\Facades\Route;

//Route::get('hello-test','HelloController@index');
Route::get(config('first-package.route'),'HelloController@index');

