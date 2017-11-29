<?php namespace Hive\Helper;

/**
 *
 * @author        Jamie Peake <jamie.peake@gmail.com>
 * @licence https://github.com/hive/Helper/blob/master/LICENSE (BSD-3-Clause)
 *
 * @package       Hive
 * @subpackage    Helper
 *
 * @copyright (c) 2017 Jamie Peake
 */
class Helper
{

    public static function str($string)
    {
        return Str::create($string);
    }


    /**
     * Alias for Str
     * @param $string
     *
     * @return mixed
     */
    public static function s($string)
    {
        return self::str($string);
    }

    public static function arr($array)
    {
        return Arr::create($array);
    }

    /**
     * Alias for Arr
     * @param $array
     *
     * @return mixed
     */
    public static function a($array)
    {
        return self::arr($array);
    }

    public static function num ($number)
    {

    }
    /**
     * Alias for Num
     * @param $number
     *
     * @return mixed
     */
    public static function n($number)
    {
        return self::num($number);
    }

    public static function dat ($date)
    {

    }

    /**
     * Alias for Dat
     * @param $date
     *
     * @return mixed
     */
    public static function d($date)
    {
        return self::dat($date);
    }




}
