<?php

namespace Songshenzong\Essentials;

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
