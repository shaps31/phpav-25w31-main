<?php

namespace App;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

class AppRuntime
{
    public function execute()
    {
        $logger = new Logger('logger');
        $logger->pushHandler(new StreamHandler('php://stdout', Level::Debug));

        $logger->info('This is a info message.', ['file' => __FILE__, 'line' => __LINE__]);
    }
}
