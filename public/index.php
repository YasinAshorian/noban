<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
*/

require __DIR__ . DIRECTORY_SEPARATOR .'../vendor/autoload.php';



/*
 |----------------------------------------------------------------
 | Register database information
 |----------------------------------------------------------------
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'noban',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();



/*
|--------------------------------------------------------------------------
| Register The Router
|--------------------------------------------------------------------------
|
*/

include __DIR__ . DIRECTORY_SEPARATOR . "../route/web.php";
