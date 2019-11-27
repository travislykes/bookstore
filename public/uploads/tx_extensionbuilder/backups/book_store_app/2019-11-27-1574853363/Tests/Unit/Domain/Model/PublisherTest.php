<?php
namespace TravisLykes\BookStoreApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Travis Lykes <fopokuamoako@gmail.com>
 */
class PublisherTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \TravisLykes\BookStoreApp\Domain\Model\Publisher
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \TravisLykes\BookStoreApp\Domain\Model\Publisher();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
