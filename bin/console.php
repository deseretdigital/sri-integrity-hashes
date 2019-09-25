<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use DDM\SRIIntegrityHash\Command\GeneratorCommand;

$application = new Application();

$application->add(new GeneratorCommand());

$application->run();
