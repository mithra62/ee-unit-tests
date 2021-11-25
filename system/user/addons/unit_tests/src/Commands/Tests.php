<?php
namespace Mithra62\UnitTests\Commands;

use ExpressionEngine\Cli\Cli;
use Mithra62\UnitTests\Args;

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
        'php eecli.php test:run'
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
        $addon = $this->option('-a');
        if(!ee('App')->has($addon)) {
            return $this->error(
                'Addon not found'
            );
        }

        //prob redundant but shit happens so :shrug:
        $provider = ee('App')->get($this->option('-a'));
        if(!$provider instanceof \ExpressionEngine\Core\Provider) {
            return $this->error(
                'Addon not found!'
            );
        }

        $tests_path = realpath($provider->getPath().'/tests');
        if(!$tests_path) {
            //check addon.setup for tests setting
            $settings = $provider->get('tests');
            if($settings) {
                $tests_path = $provider->getPath().'/'.$settings['path'];
            }
        }

        if(!$tests_path) {
            return $this->error(
                'Cannot find tests directory!'
            );
        }

        $_SERVER['argv'] = Args::buildArgs($tests_path);

        \PHPUnit\TextUI\Command::main();
    }
}