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
class Strings extends \Stringy\Stringy
{

    private $config = [
        'censor.badwords' => '',
        'truncate.substring' => '',
        'random.type' => 'distinct',
    ];


    public static function helper($string, $config = [])
    {
        return self::create($string);
    }


    /**
     * Limits a phrase to a given number of words. The third argument
     * is an end character (it is preferred to use a numeric html entity for special
     * characters); the default ending character is the ellipsis: "...".
     *
     * @param        $length
     * @param string $substring
     *
     * @return static
     */
    public function truncateWords($length, $substring = '..')
    {
        $stringy = static::create($this->str, $this->encoding);

        if (!$length || $length >= $stringy->length()) {
            return $stringy;
        }

        // Match the word limit.
        preg_match('/^\s*+(?:\S++\s*+){1,'.$length.'}/u', $stringy->str, $truncated);

        if (isset($truncated[0]))
        {
            // Only attach the end character if the matched string is shorter than the starting string.
            $stringy->str = rtrim($truncated[0]).((strlen($truncated[0]) === $stringy->length()) ? '' : $substring);
        }

        return $stringy;
    }

    /**
     * Generates a random string of a given type and length.
     *
     * @param int    $length
     * @param string $type
     * @return static Object with its $str being random
     * @todo move patterns to config
     */
    public function random($length = 8, $type = 'distinct')
    {
        $pool = '';

        $patterns = [
            'upper'     => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'lower'     => 'abcdefghijklmnopqrstuvwxyz',
            'numeric'   => '0123456789',
            'hex'       => '0123456789abcdef',
            'distinct'  =>  '2345679abdeghqrtACDEFHJKLMNPRSTUVWXYZ',
            'symbol'    =>  '!@#$%^&*()[]{};:,.<>/?|=+-_`~'
        ];

        $types = is_array($type) ? $type : [$type];

        // Add the characters for each of our types.
        foreach ($types as $type)
        {
            $pool .= $patterns[$type];
        }

        // Split our string into an array
        $pool =  str_split($pool, 1);

        // Largest pool key
        $max = count($pool) - 1;


        $str = '';
        for ($i = 0; $i < $length; $i++)
        {
            // Select a random character from the pool and add it to the string
            $str .= $pool[mt_rand(0, $max)];
        }

        return static::create($str, $this->encoding);

    }


    /**
     * Replaces the given words with a string. The second argument must be
     * an array of words and the third argument is the character to use to
     * replace the letters of the naughty word.
     *
     * @todo move patterns to config
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
        $str = preg_replace('#(?<!:)//+#', '/', $this->str);
        return static::create($str, $this->encoding);
    }


    /**
     * Converts a file size number to a byte value. File sizes are defined in
     * the format: SB, where S is the size (1, 8.5, 300, etc.) and B is the
     * byte unit (K, MiB, GB, etc.). All valid byte units are defined in
     *
     * @param   string  $force a definitive unit
     * @param   string  $format     the return string format
     * @param   boolean $si         whether to use SI prefixes or IEC
     * @return string
     */
    public function toBytes()
    {
    }


    public function encode()
    {

    }

    public function decode() {}
    // capital to word
    // bytes
    //
}
