<?php
namespace Mithra62\UnitTests\Commands;

use ExpressionEngine\Cli\Cli;

class Tests extends Cli
{
    /**
     * name of command
     * @var string
     */
    public $name = 'Tests';

    /**
     * signature of command
     * @var string
     */
    public $signature = 'tests:run';

    /**
     * Public description of command
     * @var string
     */
    public $description = 'Runs unit tests';

    /**
     * Summary of command functionality
     * @var [type]
     */
    public $summary = 'Runs unit tests';

    /**
     * How to use command
     * @var string
     */
    public $usage = [
        'php eecli.php test'
    ];

    /**
     * options available for use in command
     * @var array
     */
    public $commandOptions = [
        'addon,a:' => 'The Addon Tests you want to run'
    ];

    /**
     * Run the command
     * @return mixed
     */
    public function handle()
    {
        $_SERVER['argv'] = [
            'phpunit',
            'D:\Projects\CartThrob6\develop\htdocs\system\user\addons\custom_addon\tests'
        ];
        //
//        echo $this->option('-a');
//        print_r($_SERVER['argv']);
//        exit;
        \PHPUnit\TextUI\Command::main();
    }
}