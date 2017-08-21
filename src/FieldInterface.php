<?php

namespace RebelCode\WordPress\Admin\Settings;

use Dhii\Util\String\DescriptionAwareInterface;
use Dhii\Validation\ValidatorInterface;

/**
 * Something that represents a settings field that can be rendered.
 *
 * A settings field describes a UI component that displays and/or allows adjustment of some value.
 * Hence, it's primary purpose is rendering the UI component. Through awareness of a {@link Dhii\Type\TypeInterface
 * type}, validation of values is also possible.
 *
 * @since [*next-version*]
 */
interface FieldInterface extends
    SettingsElementInterface,
    DescriptionAwareInterface
{
}
