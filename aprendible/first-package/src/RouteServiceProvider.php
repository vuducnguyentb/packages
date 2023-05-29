<?php


namespace Aprendible\FirstPackage;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider ;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Aprendible\FirstPackage\Http\Controllers';

    /**
     * Define the routes for the application.
     *
     * @return
     */
    public function map()
    {
        Route::namespace($this->namespace)
            ->group(__DIR__.'/../routes/web.php');
    }
}