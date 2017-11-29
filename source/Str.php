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
class Str extends \Stringy\Stringy
{

    /**
     * Limits a phrase to a given number of words. The third argument
     * is an end character (it is preferred to use a numeric html entity for special
     * characters); the default ending character is the ellipsis: "...".
     *
     * @param        $limit
     * @param string $endChars
     */
    public function limitWords($limit, $endChars = '...')
    {

    }


    /**
     * Limits a phrase to a given number of characters. The third argument
     * is an end character (it is preferred to use a numeric html entity for special
     * characters); the default ending character is the ellipsis: "...".
     *
     * Setting the fourth argument to (bool) TRUE will preserve words (if you want to
     * limit *per* word, use limit_words() as both methods use different algorithms).
     *
     * @param int  $limit
     * @param null $endChars
     * @param bool $preserve
     */
    public function limitChars($limit = 100, $endChars = null, $preserve = false)
    {

    }


    /**
     * Generates a random string of a given type and length.
     *
     * @param string $type
     * @param int    $length
     */
    public function random($type = 'alpha', $length = 8)
    {

    }


    /**
     * Replaces the given words with a string. The second argument must be
     * an array of words and the third argument is the character to use to
     * replace the letters of the naughty word.
     *
     * @param $badwords
     * @param $replacement
     * @param $partical
     */
    public function censor ($badwords, $replacement, $partical)
    {

    }


    /**
     * Automatically applies <p> and <br /> markup to text. Basically nl2br() on steroids.
     *
     * @param bool $br
     */
    public function p($br = true)
    {

    }


    /**
     * An alternative to the php levenshtein() function that work out the
     * distance between 2 words using the Damerau–Levenshtein algorithm.
     *
     * @param $string
     */
    public function distance($string)
    {

    }


    /**
     * Finds the intersecting word between a set of words.
     * @param $words
     */
    public function similar($words)
    {

    }


    /**
     *  Checks the difference in a string of characters.
     *
     *  Useful for tasks such as 'password strength'
     */
    public function entropy()
    {

    }


    /**
     *  Reduces multiple slashes in a string to single slashes.
     */
    public function reduceSlashes()
    {

    }


    /**
     * Converts a file size number to a byte value. File sizes are defined in
     * the format: SB, where S is the size (1, 8.5, 300, etc.) and B is the
     * byte unit (K, MiB, GB, etc.). All valid byte units are defined in
     */
    public function bytes() {}


    public function encode() {}

    public function decode() {}
    // capital to word
    // bytes
    //
}
