<?php

namespace Songshenzong\Essentials;

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
        $this -> app -> singleton('Essentials', function ($app) {
            return new Essentials($app);
        });

        $this -> app -> alias('Essentials', 'Songshenzong\Essentials\Facade');
    }
}
