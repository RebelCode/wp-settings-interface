<?php

namespace RebelCode\WordPress\Admin\Settings;

use Dhii\Util\String\DescriptionAwareInterface;
use Dhii\Validation\ValidatorInterface;

/**
 * Something that represents a settings field that can be rendered.
 *
 * A settings field describes a single UI element that controls the display and/or adjustment of some value.
 * Hence, it's primary purpose is rendering this UI element. Furthermore, it is also responsible for ensuring that
 * received input is valid for that UI element, even if not valid from the perspective of the system.
 *
 * For example: an number field can accept a number within a range, but the system may refute it since it is meant to
 * be interpreted as the ID of some existing entity.
 *
 * @since [*next-version*]
 */
interface FieldInterface extends
    SettingsElementInterface,
    DescriptionAwareInterface,
    ValidatorInterface
{
}
