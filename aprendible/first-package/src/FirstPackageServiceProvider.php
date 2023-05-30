<?php


namespace Aprendible\FirstPackage;

use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'first-package');

        $this->publishes([
            __DIR__.'/../resources/views'=>resource_path('views/vendor/first-package')
        ],'first-package-views');

        $this->publishes([
            __DIR__.'/../config/first-package.php'=>base_path('config/first-package.php')
        ],'first-package-config');
    }

    public function register()
    {
        $this->app->bind('first-package',function(){
            return new Hello();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/first-package.php', 'first-package'
        );
    }


}