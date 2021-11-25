<?php
namespace Mithra62\UnitTests\Tests;

use PHPUnit\Framework\TestCase;
use ExpressionEngine\Core\Provider;

class AddonSetupTest extends TestCase
{
    /**
     * @return void
     */
    public function testFileExists(): void
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/addon.setup.php');
        $this->assertNotNull($file_name);
    }

    /**
     * @return Provider
     */
    public function testAuthorValue(): Provider
    {
        $addon = ee('App')->get('unit_tests');
        $this->assertEquals('mithra62', $addon->getAuthor());
        return $addon;
    }

    /**
     * @depends testAuthorValue
     * @param $addon
     * @return Provider
     */
    public function testNameValue($addon): Provider
    {
        $addon = ee('App')->get('unit_tests');
        $this->assertEquals('unit_tests', $addon->getName());
        return $addon;
    }

    /**
     * @depends testAuthorValue
     * @param $addon
     * @return Provider
     */
    public function testNamespaceValue($addon): Provider
    {
        $addon = ee('App')->get('unit_tests');
        $this->assertEquals('Mithra62\UnitTests', $addon->getNamespace());
        return $addon;
    }

    /**
     * @depends testAuthorValue
     * @param $addon
     * @return Provider1
     */
    public function testSettingsValue($addon): Provider
    {
        $addon = ee('App')->get('unit_tests');
        $this->assertFalse($addon->get('settings_exist'));
        return $addon;
    }
}