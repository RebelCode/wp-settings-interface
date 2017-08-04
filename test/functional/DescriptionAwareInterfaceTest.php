<?php

namespace RebelCode\WordPress\Admin\Settings\FuncTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Admin\Settings\DescriptionAwareInterface;

/**
 * Tests {@see RebelCode\WordPress\Admin\Settings\DescriptionAwareInterface}.
 *
 * @since [*next-version*]
 */
class DescriptionAwareInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\WordPress\\Admin\\Settings\\DescriptionAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return DescriptionAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getDescription()
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
    }
}
