<?php


namespace RebelCode\WordPress\Admin\Settings\FuncTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Admin\Settings\SettingsNodeInterface;

/**
 * Tests {@see RebelCode\WordPress\Admin\Settings\SettingsNodeInterface}.
 *
 * @since [*next-version*]
 */
class SettingsNodeInterfaceTest extends TestCase
{
    /**
     * The classname of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\WordPress\Admin\Settings\SettingsNodeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return SettingsNodeInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getKey()
            ->getValue()
            ->getLabel()
            ->getDescription()
            ->getChildren()
            ->hasChildren()
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
            'Dhii\\Data\\Tree\\KeyAwareNodeInterface', $subject,
            'Subject is not a valid instance'
        );

        $this->assertInstanceOf(
            'Dhii\\Data\\Tree\\ChildrenAwareNodeInterface', $subject,
            'Subject is not a valid instance'
        );

        $this->assertInstanceOf(
            'Dhii\\Validation\\ValidatorInterface', $subject,
            'Subject is not a valid instance'
        );

        $this->assertInstanceOf(
            'Dhii\\Output\\RendererInterface', $subject,
            'Subject is not a valid instance'
        );
    }
}
