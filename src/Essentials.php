<?php

namespace Songshenzong\Essentials;

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
        if (isset($value) && !empty($value)) {
            return true;
        }

        return false;
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
        if (isset($value) && !empty($value) && $value != 'null') {
            return true;
        }
        return false;
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
     * @param $time
     *
     * @return false|string
     */
    public function formatTime($time)
    {
        $time  = strtotime($time);
        $rtime = date("m-d H:i", $time);
        $time  = time() - $time;
        if ($time < 60) {
            $str = '刚刚';
        } else if ($time < 60 * 60) {
            $min = floor($time / 60);
            $str = $min . '分钟前';
        } else if ($time < 60 * 60 * 24) {
            $h   = floor($time / (60 * 60));
            $str = $h . '小时前';
        } else if ($time < 60 * 60 * 24 * 3) {
            $d = floor($time / (60 * 60 * 24));
            if ($d == 1) {
                $str = '昨天 ' . $rtime;
            } else {
                $str = '前天 ' . $rtime;
            }
        } else {
            $str = $rtime;
        }
        return $str;
    }


    /**
     * @param $string
     */
    public function echo_red($string)
    {
        $cmd = "echo -ne \"\033[31m" . $string . " \033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echo_green($string)
    {
        $cmd = "printf \"\033[32m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echo_brown($string)
    {
        $cmd = "printf \"\033[33m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echo_blue($string)
    {
        $cmd = "printf \"\033[34m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echo_purple($string)
    {
        $cmd = "printf \"\033[35m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }


    /**
     * @param $string
     */
    public function echo_cyan($string)
    {
        $cmd = "printf \"\033[35m" . $string . "\033[0m\n\"";
        $a   = exec($cmd);
        print "$a" . PHP_EOL;
    }

}
