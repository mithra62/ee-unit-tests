<?php

namespace Mithra62\UnitTests\Tests;

use PHPUnit\Framework\TestCase;
use ExpressionEngine\Service\Addon\Installer;

class UpdTest extends TestCase
{
    public function testUpdFileExists()
    {
        $file_name = realpath(PATH_THIRD.'/unit_tests/upd.unit_tests.php');
        $this->assertNotNull($file_name);
    }

    public function testUpdObjectExists(): void
    {
        $this->assertTrue(class_exists('\Unit_tests_upd'));
    }

    /**
     * @return \Unit_tests_upd
     */
    public function testHasCpBackendPropertyExists(): \Unit_tests_upd
    {
        $cp = new \Unit_tests_upd();
        $this->assertObjectHasAttribute('has_cp_backend', $cp);
        return $cp;
    }

    /**
     * @depends testHasCpBackendPropertyExists
     * @param \Unit_tests_upd $cp
     * @return \Unit_tests_upd
     */
    public function testCpBackendPropertyValue(\Unit_tests_upd $cp): \Unit_tests_upd
    {
        $this->assertEquals('n', $cp->has_cp_backend);
        return $cp;
    }

    /**
     * @depends testCpBackendPropertyValue
     * @return \Unit_tests_upd
     */
    public function testPublishFieldsPropertyExists(\Unit_tests_upd $cp): \Unit_tests_upd
    {
        $this->assertObjectHasAttribute('has_publish_fields', $cp);
        return $cp;
    }

    /**
     * @depends testPublishFieldsPropertyExists
     * @param \Unit_tests_upd $cp
     * @return \Unit_tests_upd
     */
    public function testPublishFieldsPropertyValue(\Unit_tests_upd $cp): \Unit_tests_upd
    {
        $this->assertEquals('n', $cp->has_publish_fields);
        return $cp;
    }

    /**
     * @depends testPublishFieldsPropertyValue
     * @param \Unit_tests_upd $cp
     * @return \Unit_tests_upd
     */
    public function testInstance(\Unit_tests_upd $cp): \Unit_tests_upd
    {
        $this->assertTrue($cp instanceof Installer);
        return $cp;
    }

    /**
     * @depends testInstance
     * @param \Unit_tests_upd $cp
     * @return \Unit_tests_upd
     */
    public function testInstallMethodExists(\Unit_tests_upd $cp)
    {
        $this->assertTrue(method_exists($cp, 'install'));
        return $cp;
    }

    /**
     * @depends testInstance
     * @param \Unit_tests_upd $cp
     * @return \Unit_tests_upd
     */
    public function testUninstallMethodExists(\Unit_tests_upd $cp)
    {
        $this->assertTrue(method_exists($cp, 'uninstall'));
        return $cp;
    }

    /**
     * @depends testInstance
     * @param \Unit_tests_upd $cp
     * @return \Unit_tests_upd
     */
    public function testUpdateMethodExists(\Unit_tests_upd $cp)
    {
        $this->assertTrue(method_exists($cp, 'update'));
        return $cp;
    }
}