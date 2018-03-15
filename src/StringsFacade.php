<?php

namespace Songshenzong\Support;

/**
 * Class StringsFacade
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
