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
class Arr extends \Arrayzy\ArrayImitator
{

    /**
     * Return a callback array from a string, eg: limit[10,20] would become
     * array('limit', array('10', '20'))
     * @param $string
     */
    public function createFromCallback($string)
    {

    }


    /**
     * Retrieves muliple single-key values from a list of arrays.
     * @param $key
     */
    public function pluck  ($key)
    {

    }


    /**
     *  Convert a multi-dimensional array into a single-dimensional array.
     */
    public function flatten()
    {

    }


    /**
     * Rotates a 2D array clockwise.
     * Example, turns a 2x3 array into a 3x2 array.
     */
    public function rotate()
    {

    }


    /**
     * Removes a key from an array and returns the value.
     * @param $key
     */
    public function remove($key)
    {

    }


    /**
     * Extract one or more keys from an array. Each key given after the first
     * argument (the array) will be extracted. Keys that do not exist in the
     * search array will be NULL in the extracted data.
     * @param $keys
     */
    public function extract ($keys)
    {

    }


    /**
     * Get the value of array key. If it doesn't exist, return default.
     * @param      $key
     * @param null $default
     */
    public function get($key, $default = null)
    {

    }


    /**
     * Recursive version of [array_map](http://php.net/array_map), applies one or more
     * callbacks to all elements in an array, including sub-arrays.
     *
     * Because PHP does not have this function, and array_walk_recursive creates
     * references in arrays and is not truly recursive.
     *
     * @param $callback
     */
    public function recursiveMap ($callback)
    {

    }


    /**
     * Overwrites an array with values from input arrays.
     * Keys that do not exist in the first array will not be added!
     */
    public function overwrite ()
    {

    }


    /**
     * Recursively convert an array to an object.
     */
    public function toObject($class = 'stdClass')
    {

    }


    /**
     * Return the data as a csv file. The csv is forced onto the browser (via
     * headers etc.).
     *
     * @param bool $header
     */
    public function toCsv($header = true)
    {

    }

    public function toQueryString()
    {
        //http_build_query
    }


    /**
     * @return static
     */
    public function encode()
    {

        return new static(base64_encode(serialize($this->elements)));
    }


    /**
     * @return static
     */
    public function decode()
    {

        return new static(unserialize(base64_decode($this->elements)));
    }

    // merge


}
