<?php

namespace Mithra62\UnitTests\Tests;

use PHPUnit\Framework\TestCase;

class McpTest extends TestCase
{
    public function testMcpFileExists()
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/mcp.unit_tests.php');
        $this->assertNotNull($file_name);
    }

    public function testMcpObjectExists()
    {
        $this->assertTrue(class_exists('\Unit_tests_mcp'));
    }
}