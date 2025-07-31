<?php

namespace factory;

class ComplexSmartphone implements SmartphoneInterface
{
    /**
     * On ne veut pas que chacun instancie cette classe.
     * Ça nécessiterait de partager le mot de passe.
     */
    public function __construct(string $verySecretPassword)
    {

    }

    public function installApp(string $appName): void
    {
    }
}
