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

    protected $config = [
        'censor' => [
            'badwords' => ['trump'],
            'replacement' => '####'
        ],
        'truncate' => [
            'substring' => ''
        ],
        'random' => [
            'patterns' => [
                'upper'     => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                'lower'     => 'abcdefghijklmnopqrstuvwxyz',
                'numeric'   => '0123456789',
                'hex'       => '0123456789abcdef',
                'distinct'  =>  '2345679abdeghqrtACDEFHJKLMNPRSTUVWXYZ',
                'symbol'    =>  '!@#$%^&*()[]{};:,.<>/?|=+-_`~'
            ]
        ]
    ];


    public static function helper($string)
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
     * @param array $patterns
     *
     * @return static Object with its $str being random
     */
    public function random($length = 8, $patterns = ['distinct'])
    {
        $pool = '';

        // Add the characters for each of our types.
        foreach ($patterns as $pattern)
        {
            if (isset($this->config['random']['patterns'][$pattern]))
            {
                $pool .= $this->config['random']['patterns'][$pattern];
            }
            else
            {
                $pool .= $pattern;
            }

        }

        // Split our string into an unique array
        $pool =  array_unique(str_split($pool, 1));

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
     * Replaces the given words with a string. The first argument must be
     * an array of words and the second argument is the character to use to
     * replace the letters of the naughty word.
     *
     * @param   array $words Words to replace
     * @param   string $replacement array of bad words to censor
     * @param   boolean $partial Replace words across word boundaries (space, period, etc)
     */
    public function censor ($words, $replacement, $partial)
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
     *
     * @param array $words Words to find similar text of
     *
     * @return static
     */
    public function similar(array $words)
    {
        // First word is the word to match against
        $word = $this->str;

        for ($i = 0, $max = $this->length(); $i < $max; ++$i)
        {
            foreach ($words as $w)
            {
                // Once a difference is found, break out of the loops
                if (!isset($w[$i]) OR $w[$i] !== $word[$i])
                {
                    break 2;
                }
            }
        }

        // Return the similar text
        return $this->substr(0, $i);
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
}
