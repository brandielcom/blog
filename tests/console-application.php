<?php

/**
 * PHPStan - Console Application Bootstrap.
 *
 * @link https://github.com/phpstan/phpstan-symfony#console-command-analysis
 */

declare(strict_types=1);

require dirname(__DIR__) . '/config/bootstrap.php';

// Initialise the kernel.
$kernel = new \App\Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);

// Return the console application.
return new \Symfony\Bundle\FrameworkBundle\Console\Application($kernel);
