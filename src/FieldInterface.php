<?php

namespace RebelCode\WordPress\Admin\Settings;

use Dhii\Util\String\DescriptionAwareInterface;
use Dhii\Validation\ValidatorInterface;

/**
 * Something that represents a settings field that can be rendered.
 *
 * A settings field describes a single UI element that controls the display and/or adjustment of some value.
 * Hence, it's primary purpose is rendering the UI element.
 *
 * @since [*next-version*]
 */
interface FieldInterface extends
    SettingsElementInterface,
    DescriptionAwareInterface
{
}
