<?php

namespace DesignPatterns\Behavioral\ServiceLocator\Tests;

use DesignPatterns\Behavioral\ServiceLocator\ServiceLocator;
use LogService;

class ServiceLocatorTest extends TestCase
{
    public function setup(): void
    {
        $this->serviceLocator = new ServiceLocator;
    }

    public function testHasService()
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        $this->assertTrue($this->serviceLocator->has(LogService::class));
        $this->assertFalse($this->serviceLocator->has(self::class));
    }
}