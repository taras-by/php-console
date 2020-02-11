#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Command\CreateUserCommand;
use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
$application->add(new CreateUserCommand());
$application->run();
