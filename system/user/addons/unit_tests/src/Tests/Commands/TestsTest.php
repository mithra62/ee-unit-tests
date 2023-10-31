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
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testSignatureAttributeExists(TestsCommand $command): TestsCommand
    {
        $this->assertObjectHasAttribute('signature', $command);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testSignatureValue(TestsCommand $command): TestsCommand
    {
        $this->assertEquals('tests:run', $command->signature);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testNameAttributeExists(TestsCommand $command): TestsCommand
    {
        $this->assertObjectHasAttribute('name', $command);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testNameValue(TestsCommand $command): TestsCommand
    {
        $this->assertNotNull($command->name);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testDescAttributeExists(TestsCommand $command): TestsCommand
    {
        $this->assertObjectHasAttribute('description', $command);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testDescValue(TestsCommand $command): TestsCommand
    {
        $this->assertNotNull($command->description);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testSummaryAttributeExists(TestsCommand $command): TestsCommand
    {
        $this->assertObjectHasAttribute('summary', $command);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testSummaryValue(TestsCommand $command): TestsCommand
    {
        $this->assertNotNull($command->summary);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testUsageAttributeExists(TestsCommand $command): TestsCommand
    {
        $this->assertObjectHasAttribute('usage', $command);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testUsageIsArray(TestsCommand $command): TestsCommand
    {
        $this->assertTrue(is_array($command->usage));
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testUsageTotalValues(TestsCommand $command): TestsCommand
    {
        $this->assertCount(1, $command->usage);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testOptionsAttributeExists(TestsCommand $command): TestsCommand
    {
        $this->assertObjectHasAttribute('commandOptions', $command);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testOptionsIsArray(TestsCommand $command): TestsCommand
    {
        $this->assertTrue(is_array($command->commandOptions));
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testOptionsTotalValues(TestsCommand $command): TestsCommand
    {
        $this->assertCount(2, $command->commandOptions);
        return $command;
    }

    /**
     * @depends testParentInstance
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testAOptionExists(TestsCommand $command): TestsCommand
    {
        $this->assertTrue(array_key_exists('addon,a:', $command->commandOptions));
        return $command;
    }

    /**
     * @depends testAOptionExists
     * @param TestsCommand $command
     * @return TestsCommand
     */
    public function testPOptionExists(TestsCommand $command): TestsCommand
    {
        $this->assertTrue(array_key_exists('path,p:', $command->commandOptions));
        return $command;
    }
}