# RebelCode - WordPress Settings Interface

[![Build Status](https://travis-ci.org/rebelcode/wp-settings-interface.svg?branch=master)](https://travis-ci.org/rebelcode/wp-settings-interface)
[![Code Climate](https://codeclimate.com/github/rebelcode/wp-settings-interface/badges/gpa.svg)](https://codeclimate.com/github/rebelcode/wp-settings-interface)
[![Test Coverage](https://codeclimate.com/github/rebelcode/wp-settings-interface/badges/coverage.svg)](https://codeclimate.com/github/rebelcode/wp-settings-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/rebelcode/wp-settings-interface/version)](https://packagist.org/packages/rebelcode/wp-settings-interface)

Interfaces for an object oriented API for WordPress settings.

## Installation

```
composer require rebelcode/wp-settings-interface
```

## Implementations

* [`rebelcode/wp-settings`]

## Implementation Guide

### [`SettingInterface`]

A [`SettingInterface`] represents a configurable piece of data in your plugin.
It is responsible for providing the following information:

#### Key

The setting key is a string that should be used to reference the setting and possibly also uniquely identify it and allow mapping the key to a setting instance.

#### Label

The setting label is a string that provides a brief name for the setting.
Hence, it should be a human readable and translatable string.

#### Description

The setting description is a string that provides a detailed explanation of the setting's purpose in your plugin.
Hence it should be a human readable and translatable string.

#### Value Type

The value type dictates what type of _data_ is valid data for the setting.
This should be an instance of [`TypeInterface`].

The value type is used primarily for, but not limited to, validation.
If the application logic needs to use the type for other purposes, the type instance can then be a [`KeyAwareTypeInterface`] instance.
This allows your application to obtain the key that corresponds to the type.

See the [`dhii/type-interface`] package for more information regarding this type standard.

#### Setting Type

The setting type is a key-like string that indicates the nature of the setting.

While the value type describes the type of the data in storage (example: database, file, etc.),
the setting type describes the whole setting.

Its purpose is to provide meaning and significance to the setting. As such, how it is used is completely up to consumer code.
However, it is recommended to employ a standard for this string that allows your code to behave in accordance to the setting's type.

For instance, a setting may have a value of type `integer` while having a setting type of `"post_id"`,
which can be used to check by your plugin to check in specialized validation and processing.

Since the setting type is expected to be a string, if you wish to have the setting type be a [`TypeInterface`] instance
to benefit from validation, then the type instance must also be able to be casted into a string.
This can be achieved by implementing [`StringableInterface`], which together with [`KeyAwareTypeInterface`] allows you
to implement something similar to the following:

```php
class MySettingType implements KeyAwareInterface, StringableInterface
{
    public function __construct($key, ValidatorInterface $validator)
    {
        // do construction
    }
    
    public function getKey()
    {
        // return your key
    }
    
    public function validate()
    {
        // do validation
    }
    
    public function __toString()
    {
        return (string) $this->getKey();
    }
}
```

This is made possible since [`SettingInterface::getSettingType`] is allowed to return a stringable instance.

### [`SettingAwareInterface`]

A [`SettingAwareInterface`] represents any object that can provide a setting.  
It exposes a `getSetting()` method that returns a [`SettingInterface`] instance.

This interface is useful for defining a standard for objects that are capable of providing a setting,
as well as objects that depend on a setting provider.

[`SettingInterface`]: src/SettingInterface.php
[`SettingInterface::getSettingType`]: src/SettingInterface.php#L44
[`SettingAwareInterface`]: src/SettingAwareInterface.php
[`rebelcode/wp-settings`]: https://github.com/RebelCode/wp-settings
[`dhii/type-interface`]: https://github.com/Dhii/type-interface
[`StringableInterface`]: https://github.com/Dhii/stringable-interface/blob/master/src/StringableInterface.php
[`TypeInterface`]: https://github.com/Dhii/type-interface/blob/task/initial-interfaces/src/TypeInterface.php
[`KeyAwareTypeInterface`]: https://github.com/Dhii/type-interface/blob/task/initial-interfaces/src/KeyAwareTypeInterface.php
