<?php namespace Hive;

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


    public static function strings($string)
    {
        return Helper\Strings::helper($string);
    }

    /**
     * Alias for Strings
     * @param $string
     *
     * @return mixed
     */
    public static function str($string)
    {
        return self::strings($string);
    }

    /**
     * Alias for Strings
     * @param $string
     *
     * @return mixed
     */
    public static function s($string)
    {
        return self::strings($string);
    }

    public static function arrays($array)
    {
        return Helper\Arrays::helper($array);
    }


    /**
     * Alias for Arrays
     * @param $array
     *
     * @return mixed
     */
    public static function arr($array)
    {
        return self::arrays($array);
    }

    /**
     * Alias for Arrays
     * @param $array
     *
     * @return mixed
     */
    public static function a($array)
    {
        return self::arrays($array);
    }




    public static function numbers ($number)
    {
        return Numbers::helper($number);
    }

    /**
     * Alias for Numbers
     * @param $number
     *
     * @return mixed
     */
    public static function num ($number)
    {
        return self::numbers($number);
    }
    /**
     * Alias for Numbers
     * @param $number
     *
     * @return mixed
     */
    public static function n($number)
    {
        return self::numbers($number);
    }

    public static function dates ($date)
    {
        return Dates::helper($date);
    }

    /**
     * Alias for dates
     * @param $date
     *
     * @return mixed
     */
    public static function dat ($date)
    {
        return self::dates($date);
    }


    /**
     * Alias for dates
     * @param $date
     *
     * @return mixed
     */
    public static function d($date)
    {
        return self::dates($date);
    }
}
