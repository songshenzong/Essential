<?php

namespace Songshenzong\Essentials\Traits;

trait Time
{
    /**
     * Format Time.
     *
     * @param $time_string
     *
     * @return false|string
     */
    public function formatTime($time_string)
    {
        $time  = time() - strtotime($time_string);
        $time1 = time() - strtotime('today');
        if ($time < 60) {
            $str = '刚刚';
        } elseif ($time < 3600) {
            $min = floor($time / 60);
            $str = $min . '分钟前';
        } elseif ($time < 24 * 3600) {
            $min = floor($time / (60 * 60));
            $str = $min . '小时前';
        } elseif ($time > $time1 && $time < 7 * 24 * 3600) {
            $min = floor($time / (3600 * 24));
            $str = $min . '天前';
        } else {
            $str = date('n月j日 H:i', strtotime($time_string));
        }

        return $str;
    }
}