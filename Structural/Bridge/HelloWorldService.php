<?php

use DesignPatterns\Structural\Bridge\Service;

class HelloWorldService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('Hello world');
    }
}