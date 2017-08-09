<?php

namespace RebelCode\WordPress\Admin\Settings;

use Traversable;

/**
 * Something that represents a settings section.
 *
 * A settings section groups multiple fields that are meant to be displayed together.
 * It's primary purpose is to render these fields in bulk, for instance under a section heading.
 *
 * @since [*next-version*]
 */
interface SectionInterface extends SettingsElementInterface
{
    /**
     * Retrieves the settings fields in this section.
     *
     * @since [*next-version*]
     *
     * @return FieldInterface[]|Traversable
     */
    public function getFields();
}
