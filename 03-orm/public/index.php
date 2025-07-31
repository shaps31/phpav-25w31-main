<?php

use App\Router;
use Illuminate\Database\Capsule\Manager as Capsule;

require __DIR__.'/../vendor/autoload.php';

$capsule = new Capsule();
$capsule->addConnection(include __DIR__.'/../config/database.php');
$capsule->setAsGlobal();
$capsule->bootEloquent();

$router = new Router();
echo $router->executeRoute($_SERVER['PATH_INFO']  ?? '/');
