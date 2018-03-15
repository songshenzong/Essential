<?php


namespace Songshenzong\Support;


class Json
{


    /**
     * @param string $string
     *
     * @return bool
     */
    public static function isJson(string $string): bool
    {
        if ($string === '') {
            return false;
        }

        \json_decode($string);
        if (\json_last_error()) {
            return false;
        }

        return true;
    }
}
