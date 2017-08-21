<?php

namespace RebelCode\WordPress\Admin\Settings;

use Dhii\Data\KeyAwareInterface;
use Dhii\Output\RendererInterface;
use Dhii\Util\String\LabelAwareInterface;

/**
 * Something that represents a settings element.
 *
 * A settings element is something that represents one or more UI components that can be used to display or allow the
 * adjustment of a setting.
 *
 * Furthermore, it is also responsible for determining if certain received values are valid for the UI component(s),
 * even if not valid from the perspective of the system. For example: a number value can be deemed valid for the
 * settings element, but may be an invalid entity ID.
 *
 * @since [*next-version*]
 */
interface ElementInterface extends
    KeyAwareInterface,
    LabelAwareInterface,
    RendererInterface
{
}
