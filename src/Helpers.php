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


if (!function_exists('echo_red')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echo_red($string)
    {
        return app('Essentials')->echo_red($string);
    }
}


if (!function_exists('echo_green')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echo_green($string)
    {
        return app('Essentials')->echo_green($string);
    }
}


if (!function_exists('echo_brown')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echo_brown($string)
    {
        return app('Essentials')->echo_brown($string);
    }
}


if (!function_exists('echo_blue')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echo_blue($string)
    {
        return app('Essentials')->echo_blue($string);
    }
}

if (!function_exists('echo_purple')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echo_purple($string)
    {
        return app('Essentials')->echo_purple($string);
    }
}


if (!function_exists('echo_cyan')) {
    /**
     * Get the instance
     *
     * @return \Songshenzong\Essentials\Essentials
     *
     * @param $string
     *
     * @return mixed
     */
    function echo_cyan($string)
    {
        return app('Essentials')->echo_cyan($string);
    }
}