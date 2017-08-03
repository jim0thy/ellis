<?php

use Dotenv\Dotenv;

require __DIR__.'/../vendor/autoload.php';

$dotEnv = new Dotenv(__DIR__.'/../');
$dotEnv->load();

$serialNo = $_ENV['SERIAL_NO'];
$userId = $_ENV['USER_ID'];
$password = $_ENV['PASSWORD'];

$client = new App\Immsersun($serialNo, $userId, $password);

print $client->getData();