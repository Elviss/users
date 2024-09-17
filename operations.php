<?php
require_once 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

require_once 'Database.php';

$database = new Database();

$database->connect($_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

// create
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['method'] === 'create') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $result = $database->create($name, $email);
    echo $result;
}

// delete
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['method'] === 'delete') {
    $id = $_POST['id'];

    $result = $database->delete($id);
    echo $result;
}