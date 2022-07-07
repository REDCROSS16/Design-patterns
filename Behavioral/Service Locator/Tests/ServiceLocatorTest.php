<?php

namespace DesignPatterns\Behavioral\ServiceLocator\Tests;

use DesignPatterns\Behavioral\ServiceLocator\ServiceLocator;

class ServiceLocatorTest extends TestCase
{
    public function setup(): void
    {
        $this->serviceLocator = new ServiceLocator;
    }

    
}