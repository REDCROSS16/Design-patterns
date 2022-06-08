<?php

namespace DesignPatterns\Behavioral\NullObject;

class Service
{
    public function __construct(private Logger $logger)
    {
        
    }

    public function doSomething()
    {
        $this->logger->log('We are in ' . __METHOD__);
    }
}