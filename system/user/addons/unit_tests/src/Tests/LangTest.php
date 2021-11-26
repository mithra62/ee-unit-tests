<?php
namespace Mithra62\UnitTests\Tests;

use PHPUnit\Framework\TestCase;

class LangTest extends TestCase
{
    public function testLangFileExists(): void
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/language/english/unit_tests_lang.php');
        $this->assertNotNull($file_name);
    }

    public function testLangFormat(): void
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/language/english/unit_tests_lang.php');
        include $file_name;
        $this->assertTrue(isset($lang));
    }

    public function testNameKeyExists(): array
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/language/english/unit_tests_lang.php');
        $lang = [];
        include $file_name;
        $this->assertArrayHasKey('unit_tests_module_name', $lang);
        return $lang;
    }

    /**
     * @depends testNameKeyExists
     * @param array $lang
     * @return array
     */
    public function testDescKeyExists(array $lang): array
    {
        $this->assertArrayHasKey('unit_tests_module_description', $lang);
        return $lang;
    }

    /**
     * @depends testNameKeyExists
     * @param array $lang
     * @return array
     */
    public function testSettingKeyExists(array $lang): array
    {
        $this->assertArrayHasKey('unit_tests_settings', $lang);
        return $lang;
    }

    /**
     * @depends testNameKeyExists
     * @param array $lang
     * @return array
     */
    public function testAddonNotFoundKeyExists(array $lang): array
    {
        $this->assertArrayHasKey('m62.ut.addon_not_found', $lang);
        return $lang;
    }

    /**
     * @depends testNameKeyExists
     * @param array $lang
     * @return array
     */
    public function testNoTestsDirKeyExists(array $lang): array
    {
        $this->assertArrayHasKey('m62.ut.cannot_find_tests_dir', $lang);
        return $lang;
    }
}