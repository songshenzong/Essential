<?php

namespace Songshenzong\Support;

/**
 * Class ServiceProvider
 *
 * @package Songshenzong\Support
 */
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
    public function register(): void
    {
        $this->app->singleton('Support', function () {
            return new Support();
        });

        $this->app->alias('Support', Facade::class);
    }
}
