<?php

namespace Songshenzong\Support\Traits;

use SimpleXMLElement;

trait Str
{


    /**
     * @param string $string
     *
     * @return bool
     */
    public static function isSerialized(string $string): bool
    {
        // Set Handle
        set_error_handler(function () {
        }, E_ALL);
        $result = unserialize($string);
        // Restores the previous error handler function
        restore_error_handler();
        return !($result === false);
    }


    /**
     * @param string $string
     *
     * @return string
     */
    public static function stringFilter(string $string): string
    {
        $filter = [
            "\n",
            '`',
            '·',
            '~',
            '!',
            '！',
            '@',
            '#',
            '$',
            '￥',
            '%',
            '^',
            '……',
            '&',
            '*',
            '(',
            ')',
            '（',
            '）',
            '-',
            '_',
            '——',
            '+',
            '=',
            '|',
            '\\',
            '[',
            ']',
            '【',
            '】',
            '{',
            '}',
            ';',
            '；',
            ':',
            '：',
            '\'',
            '"',
            '“',
            '”',
            ',',
            '，',
            '<',
            '>',
            '《',
            '》',
            '.',
            '。',
            '/',
            '、',
            '?',
            '？',
            ';',
            'nbsp',
        ];

        $str = str_replace($filter, '', $string);
        return trim($str);
    }


    /**
     * @param string $string
     *
     * @return string
     */
    public static function stringTrim(string $string): string
    {
        $filter = [
            "\0",
            "\n",
            "\t",
            "\x0B",
            "\r",
            ' ',
        ];

        $str = str_replace($filter, '', $string);
        return trim($str);
    }


    /**
     * Is Set and Not Empty.
     *
     * @param $value
     *
     * @return bool
     */
    public static function isSetAndNotEmpty($value): bool
    {
        return isset($value) && !empty($value);
    }

    /**
     * Is Set and Not Empty and Not Null.
     *
     * @param $value
     *
     * @return bool
     */
    public static function isSetAndNotEmptyAndNotNull($value): bool
    {
        return isset($value) && !empty($value) && $value !== 'null';
    }


    /**
     * @param string $string
     *
     * @return bool
     */
    public static function isXml(string $string): bool
    {
        $xml_parser = xml_parser_create();
        if (!xml_parse($xml_parser, $string, true)) {
            xml_parser_free($xml_parser);
            return false;
        }

        return true;
    }


    /**
     * @param string $string
     *
     * @return array
     */
    public static function xmlToArray(string $string): array
    {
        return json_decode(json_encode(simplexml_load_string($string)), true);
    }


    /**
     * @param string $string
     *
     * @return SimpleXMLElement
     */
    public static function xmlToObject(string $string): SimpleXMLElement
    {
        return simplexml_load_string($string);
    }


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
