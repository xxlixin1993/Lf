<?php
/**
 * Random.php
 * 描述
 * User: lixin
 * Date: 17-8-10
 */

namespace lib;


class Random
{
    /**
     * 生出随机字符串
     * @param int $length 长度
     * @return string
     * @author lixin
     */
    public static function createRandomStr($length)
    {
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= chr(mt_rand(33, 126));
        }
        return $str;
    }

}