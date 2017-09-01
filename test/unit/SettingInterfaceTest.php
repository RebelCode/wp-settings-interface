<?php

namespace RebelCode\WordPress\Admin\Settings\UnitTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Admin\Settings\SettingInterface;

/**
 * Tests {@see \RebelCode\WordPress\Admin\Settings\SettingInterface}.
 *
 * @since [*next-version*]
 */
class SettingInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\WordPress\Admin\Settings\SettingInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return SettingInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getKey()
            ->getLabel()
            ->getDescription()
            ->getValueType()
            ->getSettingType()
            ->new();

        return $mock;
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

        $this->assertInstanceOf(
            'Dhii\Data\KeyAwareInterface', $subject,
            'Test subject does not extend expected parent interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Util\String\LabelAwareInterface', $subject,
            'Test subject does not extend expected parent interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Util\String\DescriptionAwareInterface', $subject,
            'Test subject does not extend expected parent interface.'
        );
    }
}
