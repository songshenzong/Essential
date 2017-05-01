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
        \Excel ::create($filename, function ($excel) use ($filename, $data) {
            $excel -> sheet($filename, function ($sheet) use ($data) {
                $sheet -> fromArray($data);
            });
        })
               -> export('xlsx');
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

        $geo_coder = $client -> request('POST', $url, $parameters);
        $geo_coder = json_decode($geo_coder -> getBody());

        return $geo_coder;
    }
}
