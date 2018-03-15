<?php

namespace Songshenzong\Support;

/**
 * Class Facade
 *
 * @package Songshenzong\Support
 */
class StringsFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Strings';
    }
}
