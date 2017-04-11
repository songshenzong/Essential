<?php

if (!function_exists('essential')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\ResponseJson\Essential
     */
    function essential()
    {
        return app('Essential');
    }
}
