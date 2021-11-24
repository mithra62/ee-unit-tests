<?php
namespace Mithra62\UnitTests\Tests;

use PHPUnit\Framework\TestCase;

class AddonSetupTest extends TestCase
{
    public function testFileExists(): void
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/addon.setup.php');
        $this->assertNotNull($file_name);
        $this->assertTrue(file_exists($file_name));
    }

    public function testAuthorValue(): void
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/addon.setup.php');
        $setup = include $file_name;
        $this->assertIsArray($setup);
        $this->assertArrayHasKey('author', $setup);
        $this->assertEquals('mithra62', $setup['author']);
    }

    public function testNameValue(): void
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/addon.setup.php');
        $setup = include $file_name;
        $this->assertArrayHasKey('name', $setup);
        $this->assertEquals('unit_tests', $setup['name']);
    }

    public function testNamespaceValue(): void
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/addon.setup.php');
        $setup = include $file_name;
        $this->assertArrayHasKey('namespace', $setup);
        $this->assertEquals('Mithra62\UnitTests', $setup['namespace']);
    }

    public function testSettingsValue(): void
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/addon.setup.php');
        $setup = include $file_name;
        $this->assertArrayHasKey('settings_exist', $setup);
        $this->assertFalse($setup['settings_exist']);
    }
}