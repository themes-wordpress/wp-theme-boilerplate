<?php require_once __DIR__ . '/vendor/autoload.php';

// Load .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Timber\Timber;
Timber::$dirname = ['templates', 'views'];