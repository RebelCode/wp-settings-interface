<?php

namespace RebelCode\WordPress\Admin\Settings;

/**
 * Something that is aware of, and can provide, a setting.
 *
 * @since [*next-version*]
 */
interface SettingAwareInterface
{
    /**
     * Retrieves the setting.
     *
     * @since [*next-version*]
     *
     * @return SettingInterface The setting instance.
     */
    public function getSetting();
}
