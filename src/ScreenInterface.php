<?php

namespace RebelCode\WordPress\Admin\Settings;

use Traversable;

/**
 * Something that represents a settings screen.
 *
 * A settings screen is a conceptual group of settings sections. It's primary purpose is to render certain sections
 * together in a single screen.
 *
 * Note that a "screen" is not synonymous to a "page". In most environments, such as WordPress, a page is some
 * registered URL that renders content while a "screen" is what is shown on that page at any given time, such as via
 * tabs on that page.
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
