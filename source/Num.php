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
class Num
{

    /**
     * Round a number to a specified precision, using a specified tie breaking technique
     */
    public function round() {}

    /**
     * Takes a value and then abbreviates it for thousands, millions and billions.
     */
    public function abbreviate() {}


    /**
     * Returns the English ordinal suffix (th, st, nd, etc) of a number.
     */
    public function ordinal() {}


    /**
     * Format a number to human-readable text.
     * 5000632 = five million, six hundred and thirty-two
     */
    public function toWords() {}


    /**
     * Locale-aware number and monetary formatting.
     */
    public function format() {}

    /**
     * Obfuscates a integer, generally an ID
     *
     * This is not secure, but is a simple way to obfuscate the address bar.
     */
    public function obfuscate() {}


    /**
     * Will clarify a obfuscated number
     *
     * Return the real value of a integer
     */
    public function clarify () {}


    /**
     * Returns human readable sizes.
     */
    public function bytes() {}

}
