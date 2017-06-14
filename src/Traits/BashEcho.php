<?php

namespace Songshenzong\Essentials\Traits;

trait BashEcho
{
    /**
     * @param $string
     */
    public function echoRed($string)
    {
        $cmd = "echo -ne \"\033[31m" . $string . " \033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echoGreen($string)
    {
        $cmd = "printf \"\033[32m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echoBrown($string)
    {
        $cmd = "printf \"\033[33m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echoBlue($string)
    {
        $cmd = "printf \"\033[34m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echoPurple($string)
    {
        $cmd = "printf \"\033[35m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echoCyan($string)
    {
        $cmd = "printf \"\033[35m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }
}