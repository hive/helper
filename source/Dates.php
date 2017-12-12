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
class Dates
{

    public static function helper($string)
    {
        return self::create($string);
    }

    /**
     * Returns the offset (in seconds) between two time zones.
     * List of [supported timezones](http://php.net/timezones).
     */
   public function offset()
   {
       throw new Exception\InDevelopment(__FUNCTION__);
   }


    /**
     * Returns whether a time is in AM, based on a given hour.
     */
   public function isAm ()
   {
       throw new Exception\InDevelopment(__FUNCTION__);
   }




   public function days()
   {
       // cal_days_in_month
       throw new Exception\InDevelopment(__FUNCTION__);
   }


    /**
     * Returns time difference between two timestamps, as an associative array.
     */
   public function toSpanArray ()
   {
       throw new Exception\InDevelopment(__FUNCTION__);
   }


    /**
     * Returns time difference between two timestamps, in the format:
     * N year, N months, N weeks, N days, N hours, N minutes, and N seconds ago
     */
    public function toSpanString ()
    {
        throw new Exception\InDevelopment(__FUNCTION__);
    }


    /**
     * Returns the difference between a time and now in a "fuzzy" way.
     * Displaying a fuzzy time instead of a date is usually faster to read and understand.
     *
     *
     */
    public function toSpanFuzzyString()
    {
        throw new Exception\InDevelopment(__FUNCTION__);
    }


    /**
     * Returns time difference between two timestamps, in the format:
     * N year, N months, N weeks, N days, N hours, N minutes, and N seconds ago
     * limited to the number of items in the depth
     */
    public function toSpanStringConcise()
    {
        throw new Exception\InDevelopment(__FUNCTION__);
    }

    public function format($type = 'human')
    {
        throw new Exception\InDevelopment(__FUNCTION__);
        //standard
        // html
        // short
        // detailed
        // human
        // humanShort
        // humanLong
        // humanHour
        // http
        // sql
    }

    public function fromNet()
    {
        throw new Exception\InDevelopment(__FUNCTION__);
    }
    public function fromDos()
    {
        throw new Exception\InDevelopment(__FUNCTION__);
    }


}
