<?php
namespace Mithra62\UnitTests;

class Args
{
    static public function buildArgs($tests_path)
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