<?php

namespace RebelCode\WordPress\Admin\Settings\UnitTest;

use RebelCode\WordPress\Admin\Settings\FieldInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\WordPress\Admin\Settings\FieldInterface}.
 *
 * @since [*next-version*]
 */
class FieldInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\WordPress\Admin\Settings\FieldInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return FieldInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getKey()
            ->getValue()
            ->getLabel()
            ->getDescription()
            ->getFieldType()
            ->getValueType()
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
            'Test subject does not extend expected interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Data\ValueAwareInterface', $subject,
            'Test subject does not extend expected interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Util\String\LabelAwareInterface', $subject,
            'Test subject does not extend expected interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Util\String\DescriptionAwareInterface', $subject,
            'Test subject does not extend expected interface.'
        );
    }
}
