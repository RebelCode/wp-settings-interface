<?php

namespace RebelCode\WordPress\Admin\Settings;

/**
 * Something that is aware of a description.
 *
 * @since [*next-version*]
 */
interface DescriptionAwareInterface
{
    /**
     * Retrieves the detailed description.
     *
     * @since [*next-version*]
     *
     * @return string
     */
    public function getDescription();
}
