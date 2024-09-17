<?php
require_once 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

require_once 'Database.php';

$database = new Database();

$database->connect($_ENV['DB_USER'], $_ENV['DB_PASSWORD']);


