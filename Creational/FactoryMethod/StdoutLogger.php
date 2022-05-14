<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Logger;

class StdoutLogger implements Logger
{
    public function log(string $message) 
    {
        echo $message;
    }
}