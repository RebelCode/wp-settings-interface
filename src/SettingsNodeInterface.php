<?php

namespace RebelCode\WordPress\Admin\Settings;

use Dhii\Data\Tree\ChildrenAwareNodeInterface;
use Dhii\Data\Tree\KeyAwareNodeInterface;
use Dhii\Output\RendererInterface;
use Dhii\Validation\ValidatorInterface;

/**
 * Something that represents a node in a settings hierarchy.
 *
 * @since [*next-version*]
 */
interface SettingsNodeInterface extends
    KeyAwareNodeInterface,
    ChildrenAwareNodeInterface,
    LabelAwareInterface,
    DescriptionAwareInterface,
    ValidatorInterface,
    RendererInterface
{
}
