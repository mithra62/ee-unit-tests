<?php

namespace Mithra62\UnitTests\Tests;

use PHPUnit\Framework\TestCase;

class ModTest extends TestCase
{
    public function testModuleFileExists()
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/mod.unit_tests.php');
        $this->assertNotNull($file_name);
    }

    public function testModuleObjectExists()
    {
        $this->assertTrue(class_exists('\Unit_tests'));
    }
}