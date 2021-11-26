<?php
namespace Mithra62\UnitTests\Tests;

use PHPUnit\Framework\TestCase;

class ComposerTest extends TestCase
{
    public function testComposerFileExists(): void
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/composer.json');
        $this->assertNotNull($file_name);
    }

    public function testPhpVersionValueExists(): array
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/composer.json');
        $composer = json_decode(file_get_contents($file_name), true);
        $this->assertTrue(isset($composer['require']['php']));
        return $composer;
    }

    /**
     * @depends testPhpVersionValueExists
     * @param array $composer
     * @return array
     */
    public function testPhpVersionValue(array $composer): array
    {
        $this->assertEquals('>=7.3', $composer['require']['php']);
        return $composer;
    }

    /**
     * @depends testPhpVersionValueExists
     * @param array $composer
     * @return array
     */
    public function testPhpUnitValueExists(array $composer): array
    {
        $this->assertTrue(isset($composer['require']['phpunit/phpunit']));
        return $composer;
    }

    /**
     * @depends testPhpVersionValueExists
     * @param array $composer
     * @return array
     */
    public function testPhpUnitValue(array $composer): array
    {
        $this->assertEquals('^9', $composer['require']['phpunit/phpunit']);
        return $composer;
    }
}