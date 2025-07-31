<?php

namespace App;

use App\Controller\ErrorController;

class Router
{
    private const ROUTES = [
        '/' => 'App\\Controller\\ContactController::index',
        '/new' => 'App\\Controller\\ContactController::new',
        '/show' => 'App\\Controller\\ContactController::show',
    ];

    public function executeRoute(string $path): string
    {
        if (!array_key_exists($path, self::ROUTES)) {
            return (new ErrorController())->notFound();
        }

        $callback = self::ROUTES[$path];
        [$controller, $action] = explode('::', $callback);

        if (!method_exists($controller, $action)) {
            return (new ErrorController())->notFound();
        }

        return (string) (new $controller())->$action();
    }
}
