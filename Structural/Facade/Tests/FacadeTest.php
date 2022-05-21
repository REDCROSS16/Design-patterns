<?php

namespace DesignPatterns\Structural\Facade;

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock(OperationSystem::class);
        $os->method('getName')
            ->will($this->returnValue('Linux'));
        
        $bios = $this->createMock(Bios::class);
        $bios->method('launch')->will($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }
}