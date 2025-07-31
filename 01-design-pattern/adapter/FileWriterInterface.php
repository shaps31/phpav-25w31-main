<?php

interface FileWriterInterface
{
    public function writeFile(string $path, string $content);
}