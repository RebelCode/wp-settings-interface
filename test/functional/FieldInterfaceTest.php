<?php


namespace RebelCode\WordPress\Admin\Settings\FuncTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Admin\Settings\FieldInterface;

/**
 * Tests {@see RebelCode\WordPress\Admin\Settings\FieldInterface}.
 *
 * @since [*next-version*]
 */
class FieldInterfaceTest extends TestCase
{
    /**
     * The classname of the test subject.
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
            ->getLabel()
            ->getDescription()
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
            'RebelCode\WordPress\Admin\Settings\ElementInterface', $subject,
            'Subject is not a valid instance'
        );

        $this->assertInstanceOf(
            'Dhii\Util\String\DescriptionAwareInterface', $subject,
            'Subject is not a valid instance'
        );
    }
}
