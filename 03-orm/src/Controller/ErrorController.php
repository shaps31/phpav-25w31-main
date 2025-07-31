<?php

namespace App\Controller;

class ErrorController
{
    public function notFound(): string
    {
        return '<h1>404 Not Found</h1>';
    }
}