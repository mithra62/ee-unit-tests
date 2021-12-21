<?php
namespace Mithra62\UnitTests\Commands;

use ExpressionEngine\Cli\Cli;
use Mithra62\UnitTests\Args;
use ExpressionEngine\Core\Provider;

class ListIt extends Cli
{
    /**
     * name of command
     * @var string
     */
    public $name = 'List';

    /**
     * signature of command
     * @var string
     */
    public $signature = 'tests:list';

    /**
     * Public description of command
     * @var string
     */
    public $description = 'Lists the tests available to run';

    /**
     * Summary of command functionality
     * @var [type]
     */
    public $summary = 'Lists the tests available to run';

    /**
     * How to use command
     * @var string
     */
    public $usage = [
        'php eecli.php test:list'
    ];

    /**
     * options available for use in command
     * @var array
     */
    public $commandOptions = [];

    public function handle()
    {
        ee()->lang->loadfile('unit_tests');
        $providers = ee('App')->getProviders();
        if($providers) {
            $this->write('m62.ut.below_are_your_available_tests');
            foreach($providers AS $addon)
            {
                if($addon instanceof Provider) {
                    if(Args::buildPath($addon)) {;
                        $this->write($addon->getPrefix());
                    }
                }
            }
        }
    }
}