<?php


namespace Aprendible\FirstPackage;

use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'first-package');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'first-package');

        $this->loadJsonTranslationsFrom(base_path('resources/lang/json'));

        $this->publishes([
            __DIR__.'/../resources/lang'=>resource_path('lang')
        ],'first-package-lang');

        $this->publishes([
            __DIR__.'/../resources/static'=>public_path('vendor/first-package')
        ],'first-package-static-assets');

        $this->publishes([
            __DIR__.'/../database/migrations'=>database_path('migrations')
        ],'first-package-migrations');


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