<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class SomeApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('some-api',function (){
            return new \App\SomeApi('myVendor','abc123');
        });
    }

    public function boot(){

    }
}
