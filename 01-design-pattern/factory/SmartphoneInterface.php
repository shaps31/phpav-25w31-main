<?php

namespace factory;

interface SmartphoneInterface
{
    public function installApp(string $appName): void;
}
