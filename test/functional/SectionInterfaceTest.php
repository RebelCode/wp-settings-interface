<?php

namespace RebelCode\WordPress\Admin\Settings\FuncTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Admin\Settings\SectionInterface;

/**
 * Tests {@see RebelCode\WordPress\Admin\Settings\SectionInterface}.
 *
 * @since [*next-version*]
 */
class SectionInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\WordPress\Admin\Settings\SectionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return SectionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getKey()
            ->getLabel()
            ->getFields()
            ->validate()
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
            'RebelCode\WordPress\Admin\Settings\SettingsElementInterface', $subject,
            'Subject is not a valid instance'
        );
    }
}
