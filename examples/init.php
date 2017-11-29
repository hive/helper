<?php

/**
 * Include the composer autoloader
 */
require __DIR__ . '/vendor/autoload.php';


/**
 * Include the composer autoloader
 */
require __DIR__ . '/vendor/autoload.php';



echo \Hive\Helper\strings::create('Hive Helper Strings :: Create')->toUpperCase();
echo \Hive\Helper::strings('Hive Helper :: Strings')->toUpperCase();

use \Hive\Helper;

echo Helper\Strings::helper('Use Hive//Helper; Helper/Strings::helper()')->toUpperCase();
echo Helper\Strings::create('Use Hive//Helper; Helper/Strings::create()')->toUpperCase();


echo Helper::strings('use \Hive\Helper; Helper::strings')->toUpperCase();
echo Helper::str('use \Hive\Helper HElper::str()')->toUpperCase();

$helper = new Helper();
echo $helper::Strings('New $helper(); $helper::Strings')->toUpperCase();;


use \Hive\Helper\Strings;

echo Strings::helper('use \Hive\Helper\Strings Strings::helper')->toUpperCase();
echo Strings::create('use \Hive\Helper\Strings Strings::create')->toUpperCase();

use \Hive\Helper\Strings as str;
use \Hive\Helper\Strings as s;

echo str::helper('use \Hive\Helper\Strings as str str::helper()')->toUpperCase();
echo s::helper('use \Hive\Helper\Strings as s s::helper()')->toUpperCase();
die();