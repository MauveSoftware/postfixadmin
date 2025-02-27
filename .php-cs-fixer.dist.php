<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('lib')
    ->exclude('vendor')
    ->exclude('templates')
    ->exclude('templates_c')
    ->exclude('debian')
    ->files()->notName('config.inc.php')->notName('config.local.php')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config
    ->setFinder($finder)
    ->setRules(array(
        '@PSR2' => true,
        'method_argument_space' => false,           # don't break formatting in initStruct()
        'no_spaces_inside_parenthesis' => false,    # don't break formatting in initStruct()
    ));

/* vim: set expandtab softtabstop=4 tabstop=4 shiftwidth=4 ft=php: */
