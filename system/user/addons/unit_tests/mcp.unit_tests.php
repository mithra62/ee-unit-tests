<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Unit_tests_mcp
{
    public function index()
    {
        $html = '<p>Time to make magic</p>';

        return [
            'body'  => $html,
            'breadcrumb' => [
                ee('CP/URL')->make('addons/settings/unit_tests')->compile() => lang('unit_tests')
            ],
            'heading' => lang('unit_tests_settings'),
        ];
    }
}
