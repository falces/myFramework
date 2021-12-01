<?php
/**
 * Dummy training
 *
 * PHP version 7.4
 *
 * LICENSE: CC Attribution 4.0 https://creativecommons.org/licenses/by-sa/4.0/
 *
 * @category Training
 * @package  ControTrainingller
 * @author   Javier Rodríguez <falces@gmail.com>
 * @license  CC Attribution 4.0 https://creativecommons.org/licenses/by-sa/4.0/
 * @link     https://github.com/falces/myFramework
 */

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