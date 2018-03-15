<?php

namespace Songshenzong\Support;

/**
 * Class Facade
 *
 * @package Songshenzong\Support
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Support';
    }
}
