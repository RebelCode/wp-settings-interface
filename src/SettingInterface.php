<?php

namespace RebelCode\WordPress\Admin\Settings;

use Dhii\Data\KeyAwareInterface;
use Dhii\Type\KeyAwareTypeInterface;
use Dhii\Util\String\DescriptionAwareInterface;
use Dhii\Util\String\LabelAwareInterface;

/**
 * Something that represents a setting.
 *
 * A setting provides information about some configuration data through
 * database and for validation.
 *
 * @since [*next-version*]
 */
interface SettingInterface extends
    KeyAwareInterface,
    LabelAwareInterface,
    DescriptionAwareInterface
{
    /**
     * Retrieves the value type.
     *
     * The value type signifies the _data_ type that the setting represents.
     * It is used for validation purposes.
     *
     * @since [*next-version*]
     *
     * @return KeyAwareTypeInterface The value type.
     */
    public function getValueType();

    /**
     * Retrieves the settings type.
     *
     * The setting type is a string that gives meaning by specifying what the data itself should represent, unlike the
     * value type which simply specifies the type.
     *
     * @since [*next-version*]
     *
     * @return string The setting type.
     */
    public function getSettingType();
}
