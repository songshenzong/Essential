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


if (!function_exists('echoRed')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echoRed($string)
    {
        return app('Essentials')->echoRed($string);
    }
}


if (!function_exists('echoGreen')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echoGreen($string)
    {
        return app('Essentials')->echoGreen($string);
    }
}


if (!function_exists('echoBrown')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echoBrown($string)
    {
        return app('Essentials')->echoBrown($string);
    }
}


if (!function_exists('echoBlue')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echoBlue($string)
    {
        return app('Essentials')->echoBlue($string);
    }
}

if (!function_exists('echoPurple')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echoPurple($string)
    {
        return app('Essentials')->echoPurple($string);
    }
}


if (!function_exists('echoCyan')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echoCyan($string)
    {
        return app('Essentials')->echoCyan($string);
    }
}