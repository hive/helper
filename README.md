# Hive Helper
[![Latest Stable Version](https://poser.pugx.org/hive/helper/v/stable?format=flat-square)](https://packagist.org/packages/hive/helper)
[![Latest Unstable Version](https://poser.pugx.org/hive/helper/v/unstable?format=flat-square)](https://packagist.org/packages/hive/helper)
[![License](https://poser.pugx.org/hive/helper/license?format=flat-square)](https://packagist.org/packages/hive/helper)
[![composer.lock](https://poser.pugx.org/hive/helper/composerlock?format=flat-square)](https://packagist.org/packages/hive/helper)
[![Build Status](https://img.shields.io/travis/hive/helper/1.0.1.3.svg?style=flat-square)](https://travis-ci.org/hive/helper)

Hive Helper, gives a common interface and extends for Stringy\Stringy and Arrayzy\ArrayImitator while adding number/date/file helpers, Version 1.0 currently being developed

## Documentation

https://hive.github.io/helper/

## Notes

Version 1.0 Outstanding Items 
 * 

## Installation

Recommended installation [through composer](http://getcomposer.org).

```JSON
{
    "require": {
        "hive/Helper": "dev-master"
    }
}
```

Via Composer Command line

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php

# Install the latest version
composer require hive/Helper

```

```php
// With in your php file, include composers autoloader
require 'vendor/autoload.php';
```

Via Git

```bash
# Clone the repo
cd helloworld.dev
git clone https://github.com/hive/helper.git . 
```

```php
// With in your php file, include composers autoloader
require 'hive/helper/include.php';
```

## Overview

The code is split up into the following classes : 

1. Library.php : The actual benchmarking library, useful for extending functionality.
2. Object.php : Class for accessing the benchmark object.
3. Instance.php : Instance of the object class.

## Useage
-------
 ```php
    use hive\Helper;
 ```
 
