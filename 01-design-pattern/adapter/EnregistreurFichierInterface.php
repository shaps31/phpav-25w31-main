<?php

interface EnregistreurFichierInterface
{
    public function ecrireFichier(string $contenu, string $chemin);
}