<?php

namespace RebelCode\WordPress\Admin\Settings;

use Dhii\Data\KeyAwareInterface;
use Dhii\Output\RendererInterface;
use Dhii\Util\String\LabelAwareInterface;

/**
 * Something that represents a settings element.
 *
 * @since [*next-version*]
 */
interface SettingsElementInterface extends
    KeyAwareInterface,
    LabelAwareInterface,
    RendererInterface
{
}
