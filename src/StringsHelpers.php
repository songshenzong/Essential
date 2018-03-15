<?php

if (!function_exists('strings')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Support\Strings
     */
    function support()
    {
        return app('Strings');
    }
}
