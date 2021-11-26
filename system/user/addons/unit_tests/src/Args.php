<?php
namespace Mithra62\UnitTests;

use ExpressionEngine\Core\Provider;

class Args
{
    /**
     * Determines the full path to the Tests location for the Add-on
     * @param Provider $addon
     * @return string|null
     */
    static public function buildPath(Provider $addon): ? string
    {
        $tests_path = realpath($addon->getPath().'/tests');
        if(!$tests_path) {
            //check addon.setup for tests setting
            $settings = $addon->get('tests');
            if(!empty($settings['path'])) {
                $tests_path = $addon->getPath().'/'.$settings['path'];
            }

            return $tests_path;
        }

        return null;
    }

    /**
     * Prepares teh PHPUnit Command Line string for use in $_SERVER['argv']
     * @param $tests_path
     * @return array
     */
    static public function buildArgs($tests_path): array
    {
        $args = ['phpunit'];
        $xml_file = $tests_path.'/phpunit.xml';
        if(file_exists($xml_file)) {
            $args[] = '-c';
            $args[] = $xml_file;
        }

        $args[] = $tests_path;

        return $args;
    }
}