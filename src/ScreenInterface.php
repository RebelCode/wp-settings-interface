<?php

namespace RebelCode\WordPress\Admin\Settings;

use Traversable;

/**
 * Something that represents a settings screen.
 *
 * A settings screen is a conceptual group of settings sections.
 * It's primary purpose is to render certain sections together in a single screen.
 *
 * @since [*next-version*]
 */
interface ScreenInterface extends SettingsElementInterface
{
    /**
     * Retrieves the settings sections.
     *
     * @since [*next-version*]
     *
     * @return SectionInterface[]|Traversable
     */
    public function getSections();
}
