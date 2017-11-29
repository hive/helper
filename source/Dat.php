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
class Dat
{

    /**
     * Returns the offset (in seconds) between two time zones.
     * List of [supported timezones](http://php.net/timezones).
     */
   public function offset() {}


    /**
     * Returns whether a time is in AM, based on a given hour.
     */
   public function isAm () {}



   public function days()
   {
       // cal_days_in_month
   }


    /**
     * Returns time difference between two timestamps, as an associative array.
     */
   public function toSpanArray () {}


    /**
     * Returns time difference between two timestamps, in the format:
     * N year, N months, N weeks, N days, N hours, N minutes, and N seconds ago
     */
    public function toSpanString () {}


    /**
     * Returns the difference between a time and now in a "fuzzy" way.
     * Displaying a fuzzy time instead of a date is usually faster to read and understand.
     *
     *
     */
    public function toSpanFuzzyString() {}


    /**
     * Returns time difference between two timestamps, in the format:
     * N year, N months, N weeks, N days, N hours, N minutes, and N seconds ago
     * limited to the number of items in the depth
     */
    public function toSpanStringConcise() {}

    public function format($type = 'human')
    {
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

    public function fromNet() {}
    public function fromDos() {}


}
