<?php
namespace Mithra62\UnitTests\Tests;

use PHPUnit\Framework\TestCase;
use Mithra62\UnitTests\Args;

class ArgsTest extends TestCase
{
    public function testBuildPath(): string
    {
        $addon = ee('App')->get('unit_tests');
        $path = Args::buildPath($addon);
        $this->assertTrue(is_string($path));
        return $path;
    }

    /**
     * @depends testBuildPath
     * @param $path
     */
    public function testBuildArgsArray($path)
    {
        $args = Args::buildArgs($path);
        $this->assertIsArray($args);
        $parts = array_reverse($args);
        $first = array_pop($parts);
        $this->assertEquals($first, 'phpunit');
        $this->assertEquals(end($args), $path);
    }

    public function testBuildPathNoTests(): void
    {
        $addon = $this->createMock('ExpressionEngine\Core\Provider');
        $path = Args::buildPath($addon);
        $this->assertFalse(is_string($path));
    }
}
