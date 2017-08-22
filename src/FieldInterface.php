<?php

namespace RebelCode\WordPress\Admin\Settings;

use Dhii\Data\KeyAwareInterface;
use Dhii\Data\ValueAwareInterface;
use Dhii\Type\TypeInterface;
use Dhii\Util\String\DescriptionAwareInterface;
use Dhii\Util\String\LabelAwareInterface;

/**
 * Something that represents a settings field.
 *
 * A settings field represents a UI component that displays and/or allows modification of some value, together
 * with additional display data (such as label and description). The related value
 *
 * @since [*next-version*]
 */
interface FieldInterface extends
    KeyAwareInterface,
    ValueAwareInterface,
    LabelAwareInterface,
    DescriptionAwareInterface
{
    /**
     * Retrieves the type for this field.
     *
     * @since [*next-version*]
     *
     * @return FieldTypeInterface The field type.
     */
    public function getFieldType();

    /**
     * Retrieves the type of the value controlled by this field.
     *
     * @since [*next-version*]
     *
     * @return TypeInterface The value type.
     */
    public function getValueType();
}
