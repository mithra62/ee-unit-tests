<?php
namespace Mithra62\UnitTests\Tests\Commands;

use PHPUnit\Framework\TestCase;
use Mithra62\UnitTests\Commands\Tests AS TestsCommand;

class TestsTest extends TestCase
{
    public function testParentInstance(): TestsCommand
    {
        $command = new TestsCommand;
        $this->assertInstanceOf('ExpressionEngine\Cli\Cli', $command);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param $command
     * @return TestsCommand
     */
    public function testSignatureAttributeExists(TestsCommand $command): TestsCommand
    {
        $this->assertObjectHasAttribute('signature', $command);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param $command
     * @return TestsCommand
     */
    public function testSignatureValue(TestsCommand $command): TestsCommand
    {
        $this->assertEquals('tests:run', $command->signature);
        return $command;
    }
}