<?php
/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-12-13 at 15:40:40.
 */
class ExampleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var example
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Example();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @test
     * @covers Example::setIntNumberOne
     */
    public function testSetIntNumberOne()
    {
        $this->object->setIntNumberOne(1);
        $this->assertEquals(1, $this->object->intNumberOne);
      #  $this->assertEquals(1, 0);
    }
}