<?php

namespace Songshenzong\Essential;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Essential';
    }
}
