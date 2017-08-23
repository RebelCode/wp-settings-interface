<?php

namespace RebelCode\WordPress\Admin\Settings\FuncTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Admin\Settings\LayoutInterface;

/**
 * Tests {@see \RebelCode\WordPress\Admin\Settings\LayoutInterface}.
 *
 * @since [*next-version*]
 */
class LayoutInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\WordPress\Admin\Settings\LayoutInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return LayoutInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getChildren()
            ->hasChildren()
            ->render()
            ->__toString()
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
            'Dhii\Data\Hierarchy\ChildrenAwareInterface', $subject,
            'The test subject does not extend expected parent interface'
        );

        $this->assertInstanceOf(
            'Dhii\Output\BlockInterface', $subject,
            'The test subject does not extend expected parent interface'
        );
    }
}
