<?php

namespace RebelCode\WordPress\Admin\Settings;

use Dhii\Data\Hierarchy\ChildrenAwareInterface;
use Dhii\Output\BlockInterface;

/**
 * Something that represents a layout.
 *
 * A layout is an organization of blocks that defines a fragment of a UI page.
 *
 * @since [*next-version*]
 */
interface LayoutInterface extends
    BlockInterface,
    ChildrenAwareInterface
{
}
