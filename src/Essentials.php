<?php

namespace Songshenzong\Essentials;

use function strtotime;

/**
 * Class Essentials
 *
 * @package Songshenzong\Essentials
 */
class Essentials
{

    /**
     * Is Set and Not Empty.
     *
     * @param $value
     *
     * @return bool
     */
    public function isSetAndNotEmpty($value)
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
    public function isSetAndNotEmptyAndNotNull($value)
    {
        return isset($value) && !empty($value) && $value !== 'null';
    }

    /**
     * Export date to Excel file.
     *
     * @param $filename
     * @param $data
     */
    public function excel($filename, $data)
    {
        \Excel::create($filename, function ($excel) use ($filename, $data) {
            $excel->sheet($filename, function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })
              ->export('xlsx');
    }


    /**
     * Get geoCoder by Baidu.
     *
     * @param $lat
     * @param $lng
     * @param $ak
     * @param $mcode
     * @param $url
     *
     * @return mixed
     */
    public function geoCoder($lat, $lng, $ak, $mcode, $url)
    {
        $client = new \GuzzleHttp\Client();

        $parameters = [
            'form_params' => [
                'ak'       => $ak,
                'location' => $lat . ',' . $lng,
                'output'   => 'json',
                'pois'     => 0,
                'mcode'    => $mcode,
            ],
        ];

        $geo_coder = $client->request('POST', $url, $parameters);
        $geo_coder = json_decode($geo_coder->getBody());

        return $geo_coder;
    }


    /**
     * Format Time.
     *
     * @param $ustime
     *
     * @return false|string
     */
    public function formatTime($ustime)
    {
        $time  = time() - strtotime($ustime);
        $time1 = time() - strtotime('today');
        if ($time < 60) {
            $str = '刚刚';
        } else if ($time < 60 * 60) {
            $min = floor($time / 60);
            $str = $min . '分钟前';
        } else if ($time < 24 * 3600) {
            $min = floor($time / (60 * 60));
            $str = $min . '小时前';
        } else if ($time > $time1 && $time < 7 * 24 * 60 * 60) {
            $min = floor($time / (60 * 60 * 24));
            $str = $min . '天前';
        } else {
            $str = date('n月j日 H:i', $ustime);
        }

        return $str;
    }


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
