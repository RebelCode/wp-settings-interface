<?php

namespace RebelCode\WordPress\Admin\Settings\UnitTest;

use RebelCode\WordPress\Admin\Settings\FieldTypeInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\WordPress\Admin\Settings\FieldTypeInterface}.
 *
 * @since [*next-version*]
 */
class FieldTypeInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\WordPress\Admin\Settings\FieldTypeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return FieldTypeInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getKey()
            ->getBlock()
            ->validate()
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
            'Dhii\Type\KeyAwareTypeInterface', $subject,
            'Test subject does not extend expected interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Output\BlockAwareInterface', $subject,
            'Test subject does not extend expected interface.'
        );
    }
}
