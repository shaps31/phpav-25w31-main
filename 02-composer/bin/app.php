<?php
#!/usr/bin/php

use App\AppRuntime;

// Autoloader de composer.
// Prend en charge plusieurs manières de charger les définitions sans avoir à faire explicitement des include ou require.
require __DIR__ . '/../vendor/autoload.php';

$app = new AppRuntime();
$app->execute();
