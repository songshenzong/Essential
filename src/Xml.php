<?php


namespace Songshenzong\Support;


use SimpleXMLElement;

class Xml
{

    /**
     * @param $string
     *
     * @return bool
     */
    public static function isXml($string): bool
    {
        $xml_parser = xml_parser_create();
        if (!xml_parse($xml_parser, $string, true)) {
            xml_parser_free($xml_parser);
            return false;
        }

        return true;
    }


    /**
     * @param $string
     *
     * @return array
     */
    public static function xmlToArray($string): array
    {
        return json_decode(json_encode(simplexml_load_string($string)), true);
    }


    /**
     * @param $string
     *
     * @return SimpleXMLElement
     */
    public static function xmlToObject($string): SimpleXMLElement
    {
        return simplexml_load_string($string);
    }

}
