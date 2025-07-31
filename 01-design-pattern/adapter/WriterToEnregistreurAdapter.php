<?php

/**
 * L'adaptateur implémente l'interface que je souhaite utiliser.
 *
 * Il manipule un objet d'une autre interface.
 */
class WriterToEnregistreurAdapter implements FileWriterInterface
{
    public function __construct(
        private EnregistreurFichierInterface $enregistreurFichier
    ) {
    }

    /**
     * Les appels de méthode de la première interface sont traduits
     * dans la seconde interface.
     */
    public function writeFile(string $path, string $content)
    {
        $this->enregistreurFichier->ecrireFichier($content, $path);
    }
}
