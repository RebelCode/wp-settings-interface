<?php

namespace RebelCode\WordPress\Admin\Settings\FuncTest;

use RebelCode\WordPress\Admin\Settings\SettingsElementInterface;
use Xpmock\TestCase;

/**
 * Tests {@see RebelCode\WordPress\Admin\Settings\SettingsNodeInterface}.
 *
 * @since [*next-version*]
 */
class SettingsElementInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\WordPress\Admin\Settings\SettingsElementInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return SettingsElementInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getKey()
            ->getLabel()
            ->render()
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
            'Subject is not a valid instance'
        );

        $this->assertInstanceOf(
            'Dhii\Data\KeyAwareInterface', $subject,
            'Subject does not extend expected parent.'
        );

        $this->assertInstanceOf(
            'Dhii\Util\String\LabelAwareInterface', $subject,
            'Subject does not extend expected parent.'
        );

        $this->assertInstanceOf(
            'Dhii\Output\RendererInterface', $subject,
            'Subject does not extend expected parent.'
        );
    }
}
