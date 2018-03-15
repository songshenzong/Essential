<?php

if (!function_exists('support')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Support\Support
     */
    function support()
    {
        return app('Support');
    }
}


if (!function_exists('echoRed')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Support\Support
     *
     * @param $string
     *
     * @return mixed
     */
    function echoRed($string)
    {
        return app('Support')->echoRed($string);
    }
}


if (!function_exists('echoGreen')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Support\Support
     *
     * @param $string
     *
     * @return mixed
     */
    function echoGreen($string)
    {
        return app('Support')->echoGreen($string);
    }
}


if (!function_exists('echoBrown')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Support\Support
     *
     * @param $string
     *
     * @return mixed
     */
    function echoBrown($string)
    {
        return app('Support')->echoBrown($string);
    }
}


if (!function_exists('echoBlue')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Support\Support
     *
     * @param $string
     *
     * @return mixed
     */
    function echoBlue($string)
    {
        return app('Support')->echoBlue($string);
    }
}

if (!function_exists('echoPurple')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Support\Support
     *
     * @param $string
     *
     * @return mixed
     */
    function echoPurple($string)
    {
        return app('Support')->echoPurple($string);
    }
}


if (!function_exists('echoCyan')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Support\Support
     *
     * @param $string
     *
     * @return mixed
     */
    function echoCyan($string)
    {
        return app('Support')->echoCyan($string);
    }
}
