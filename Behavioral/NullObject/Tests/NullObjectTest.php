<?php

namespace DesignPatterns\Behavioral\NullObject\Tests;

use DesignPatterns\Behavioral\NullObject\Service;
use DesignPatterns\Behavioral\NullObject\NullLogger;
use DesignPatterns\Behavioral\NullObject\PrintLogger;

class LoggerTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutput('');
        $service->doSomething();
    }

    public function testStandardObject()
    {
        $service = new Service( new PrintLogger());
        $this->expectOutput('We are in ::doSomething');
        $service->doSomething();
    }
}