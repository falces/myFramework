<?php
require dirname(__DIR__).'/vendor/autoload.php';

use App\Controllers\User;
use Falces\DotEnvLoader;

$environmentVariables = new DotEnvLoader(dirname(__DIR__).'/.env');
$environmentVariables->load();
var_dump($environmentVariables->getEnvironmentVariables());

$user = new User('Javi');
echo $user->getName() . PHP_EOL;