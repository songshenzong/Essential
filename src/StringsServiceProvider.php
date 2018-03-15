<?php

namespace Songshenzong\Support;


/**
 * Class StringsServiceProvider
 *
 * @package Songshenzong\Support
 */
class StringsServiceProvider extends \Illuminate\Support\ServiceProvider
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
        $this->app->singleton('Strings', function () {
            return new Strings();
        });

        $this->app->alias('Strings', StringsFacade::class);
    }
}
