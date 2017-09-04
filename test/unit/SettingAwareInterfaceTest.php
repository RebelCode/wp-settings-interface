<?php

namespace RebelCode\WordPress\Admin\Settings\UnitTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Admin\Settings\SettingAwareInterface;

/**
 * Tests {@see \RebelCode\WordPress\Admin\Settings\SettingAwareInterface}.
 *
 * @since [*next-version*]
 */
class SettingAwareInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\WordPress\Admin\Settings\SettingAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return SettingAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getSetting();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject,
            'A valid instance of the test subject could not be created.'
        );
    }
}
