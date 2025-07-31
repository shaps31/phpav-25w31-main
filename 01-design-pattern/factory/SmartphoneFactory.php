<?php

namespace factory;

class SmartphoneFactory
{
    /**
     * Retourne un type plus simple / générique que celui qui est réellement instancié.
     */
    public function createSmartphone(): SmartphoneInterface
    {
        /**
         * Contient la logique spécifique pour instancier la classe concernée.
         */
        return new ComplexSmartphone('this is very secret');
    }
}
