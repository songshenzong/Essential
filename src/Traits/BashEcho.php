<?php

namespace Songshenzong\Support\Traits;

trait BashEcho
{
    /**
     * @param $string
     */
    public function echoRed($string): void
    {
        $cmd = "echo -ne \"\033[31m" . $string . " \033[0m\n\"";
        $a   = exec($cmd);
        print (string) $a . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echoGreen($string): void
    {
        $cmd = "printf \"\033[32m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print (string) $a . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echoBrown($string): void
    {
        $cmd = "printf \"\033[33m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print (string) $a . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echoBlue($string): void
    {
        $cmd = "printf \"\033[34m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print (string) $a . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echoPurple($string): void
    {
        $cmd = "printf \"\033[35m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print (string) $a . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echoCyan($string): void
    {
        $cmd = "printf \"\033[35m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print (string) $a . PHP_EOL;
    }
}
