<?php

namespace Songshenzong\Support;

use InvalidArgumentException;

/**
 * Class Arrays
 *
 * @package Songshenzong\Support
 */
class Arrays
{
    /**
     * @param array $arrays
     *
     * @return array
     */
    public static function merge(array $arrays)
    {
        $result = [];
        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                if (is_int($key)) {
                    $result[] = $value;
                    continue;
                }

                if (isset($result[$key]) && is_array($result[$key])) {
                    $result[$key] = self::merge(
                        [$result[$key], $value]
                    );
                    continue;
                }

                $result[$key] = $value;
            }
        }

        return $result;
    }

    /**
     * Returns item from array or $default if item is not set.
     *
     * @param array            $array
     * @param string|int|array $key one or more keys
     * @param null             $default
     *
     * @return mixed
     */
    public static function get(array $array, $key, $default = null)
    {
        foreach (is_array($key) ? $key : [$key] as $k) {
            if (is_array($array) && array_key_exists($k, $array)) {
                $array = $array[$k];
            } else {
                if (func_num_args() < 3) {
                    throw new InvalidArgumentException("Missing item '$k'.");
                }

                return $default;
            }
        }

        return $array;
    }
}
