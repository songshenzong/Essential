<?php

if (!function_exists('essentials')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     */
    function essentials()
    {
        return app('Essentials');
    }
}
