<?php

use Songshenzong\Support\BashEcho;

if (!function_exists('echoRed')) {
    /**
     * @param $string
     */
    function echoRed($string)
    {
        return (new BashEcho)->echoRed($string);
    }
}


if (!function_exists('echoGreen')) {
    /**
     * @param $string
     */
    function echoGreen($string)
    {
        return (new BashEcho)->echoGreen($string);
    }
}


if (!function_exists('echoBrown')) {
    /**
     * @param $string
     */
    function echoBrown($string)
    {
        return (new BashEcho)->echoBrown($string);
    }
}


if (!function_exists('echoBlue')) {

    /**
     * @param $string
     */
    function echoBlue($string)
    {
        return (new BashEcho)->echoBlue($string);
    }
}

if (!function_exists('echoPurple')) {
    /**
     * @param $string
     */
    function echoPurple($string)
    {
        return (new BashEcho)->echoPurple($string);
    }
}


if (!function_exists('echoCyan')) {
    /**
     * @param $string
     */
    function echoCyan($string)
    {
        return (new BashEcho)->echoCyan($string);
    }
}
