<?php
namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Logger;
use DesignPatterns\Creational\FactoryMethod\LoggerFactory;
use DesignPatterns\Creational\FactoryMethod\StdoutLogger;

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}