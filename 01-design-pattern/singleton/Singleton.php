<?php

/**
 * Design pattern Singleton.
 *
 * Contexte : je souhaite avoir une instance tout en garantissant
 * qu'il n'y en aura jamais plus d'une en même temps.
 *
 * Démarche :
 *  1. empêcher création libre d'instance en mettant le constructeur privé
 *  2. créer notre propre méthode de création d'instance
 *  3. conditionner l'accès à une instance unique, référencée en propriété statique.
 *
 * Limitation : on cherche souvent à éviter l'utilisation de static si non nécessaire.
 */
class Singleton
{
    private static $instance;

    private function __construct()
    {
    }

    public static function createInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

$singletonObject = Singleton::createInstance();
