<?php

namespace Songshenzong\Essential;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this -> app -> singleton('Essential', function ($app) {
            return new Essential($app);
        });

        $this -> app -> alias('Essential', 'Songshenzong\Essential\Facade');
    }

}
