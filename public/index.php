<?php
require dirname(__DIR__).'/vendor/autoload.php';

use App\Controllers\User;
use Falces\DotEnvLoader;

try{
    $environmentVariables = new DotEnvLoader(dirname(__DIR__));
    $environmentVariables->load();
    var_dump($environmentVariables->getEnvironmentVariables());
} catch (InvalidArgumentException $e){
    echo 'Error: ' . $e->getMessage() . ' (' . $e->getCode() . ')';
}

$user = new User('Javi');
echo $user->getName() . PHP_EOL;