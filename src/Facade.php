<?php

namespace Songshenzong\Essentials;

/**
 * Class Facade
 *
 * @package Songshenzong\Essentials
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Essentials';
    }
}
