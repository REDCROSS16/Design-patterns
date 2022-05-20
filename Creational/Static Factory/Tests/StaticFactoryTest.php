<?php

namespace DesignPatterns\Creational\StaticFactory\Tests;

use DesignPatterns\Creational\StaticFactory\Formatter;
use DesignPatterns\Creational\StaticFactory\StaticFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase 
{
    public function canCreateNumberFormatter() 
    {
        $this->assertInstanceOf(Formatter::class, StaticFactory::factory('number'));
    }

    public function canCreateStringFormatter() {
        $this->assertInstanceOf(Formatter::class, StaticFactory::factory('string'));
    }

    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);
        StaticFactory::factory('object');
    }
}