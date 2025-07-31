<?php

// On a à disposition un objet qui implémente FileWriterInterface
/** @var FileWriterInterface $fileWriter */

$fileWriter->writeFile('/home/user/app.log', 'hello');