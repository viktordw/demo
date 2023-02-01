#!/usr/bin/env php
<?php
require('vendor/autoload.php');

printf("Usage: cpadmin --option=value\n");

// Opcije
$getopt = new \GetOpt\GetOpt([
    
    \GetOpt\Option::create('a', 'alpha', \GetOpt\GetOpt::REQUIRED_ARGUMENT)
        ->setDescription('This is the description for the alpha option')
        ->setArgument(new \GetOpt\Argument(null, 'is_numeric', 'alpha')),
    
    \GetOpt\Option::create('b', 'beta', \GetOpt\GetOpt::NO_ARGUMENT)
        ->setDescription('This is the description for the beta option'),
]);
