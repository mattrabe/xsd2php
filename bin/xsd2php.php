#!/bin/php
<?php

include __DIR__ . '/../vendor/autoload.php';

use Goetas\Xsd\XsdToPhp\Console\ConsoleRunner;

$cli = new ConsoleRunner();
$cli->run();