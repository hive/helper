<?php namespace Hive\Helper\Exception;

/**
 * Extends Hive\Helper\Exception
 */
use Hive\Helper\Exception;

/**
 * Does Not Exist Exception.
 *
 * Called when the helper is in development
 *
 * @author        Jamie Peake <jamie.peake@gmail.com>
 * @licence https://github.com/hive/benchmark/blob/master/LICENSE (BSD-3-Clause)
 *
 * @package       Hive
 * @subpackage    Helper
 *
 * @copyright (c) 2017 Jamie Peake
 */
class InDevelopment extends Exception
{
    /**
     * Exception code, sequential exception numbers.
     */
    const CODE = 1;

    /**
     *  Exception Message to be displayed.
     */
    const MESSAGE = 'The helper named :name does not yet exist, this library is currently in development.';

    /**
     * In Development, assigns exception code the message.
     *
     * Will also place the name of the helper into the exception message if we have it.
     *
     * @param string $name the name of the helper which hasn't been written
     */
    public function __construct($name)
    {
        $code = self::CODE;
        $message = strtr(self::MESSAGE, [':name' => $name]);

        parent::__construct($message, $code);
    }
}
