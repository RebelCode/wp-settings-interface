<?php

namespace RebelCode\WordPress\Admin\Settings;

/**
 * Something that is aware of a label.
 *
 * @since [*next-version*]
 */
interface LabelAwareInterface
{
    /**
     * Retrieves the label.
     *
     * @since [*next-version*]
     *
     * @return string
     */
    public function getLabel();
}
