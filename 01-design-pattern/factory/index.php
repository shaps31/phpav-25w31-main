<?php

use factory\SmartphoneFactory;

require_once __DIR__ . '/SmartphoneFactory.php';

$factory = new SmartphoneFactory();
// Me retourne une instance de SmartphoneInterface
// L'utilisateur n'a besoin de connaître que l'interface qui est "simple".
// Il n'a pas besoin de maîtriser l'implémentation (découplage).
$smartphone = $factory->createSmartphone(); // SmartphoneInterface
