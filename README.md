# EE Unit Tests

EE Unit Tests is an Add-on for ExpressionEngine that allows developers to execute unit tests from the Command Line. EE Unit Tests uses PHPUnit 9 out of the box though, in theory, you should be able to use whatever version you want.

## Requirements

1. ExpressionEngine >= 6.1
2. PHP 7.3 


## How It Works

EE Unit Tests is middleware between ExpressionEngine and your unit tests that you execute through ExpressionEngine's Command Line tool (introduced in 6.1). 

### Example Command

This will execute the Tests within the `unit_tests` add-on. 

`php .\system\eecli.php tests:run -a unit_tests`

### WHY THE HELL WOULD YOU BUILD IT THIS WAY?!?!

So, previously, to run unit tests on ExpressionEngine code was cumbersome (at best). We're talking bootstraps, code runners, database instantiation, raw CodeIgniter, the list goes on. And this was PER PROJECT. 

#### It pretty much sucked. 

But, with release of 6.1, we got Command Line tools! Which handles all the rigamarole of setting all the bootstrap and environment up. So, yeah, just a silly little pass through thing here is all that's needed.

## Limitations

The biggest problem is that there isn't any [Command Line Options](https://phpunit.readthedocs.io/en/9.5/textui.html#command-line-options) Support for configuration. Too much. Not worth it. Instead, be sure to use a `phpunit.xml` configuration file stored within your Tests root directory. 