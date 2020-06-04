<?php

/**
 * PHPStan - Doctrine Object Manager Bootstrap.
 *
 * @link https://github.com/phpstan/phpstan-doctrine#configuration
 */

declare(strict_types=1);

require dirname(__DIR__) . '/config/bootstrap.php';

// Initialise the kernel
$kernel = new \App\Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();

// Return the object manager.
return $kernel->getContainer()->get('doctrine')->getManager();
