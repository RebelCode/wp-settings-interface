<?php

namespace RebelCode\WordPress\Admin\Settings;

use Dhii\Output\BlockAwareInterface;
use Dhii\Type\KeyAwareTypeInterface;

/**
 * Something that represents a field type.
 *
 * A field type uniquely describes the field by how it is rendered, i.e. the block that is used to render the
 * UI field component.
 *
 * @since [*next-version*]
 */
interface FieldTypeInterface extends
    KeyAwareTypeInterface,
    BlockAwareInterface
{
}
