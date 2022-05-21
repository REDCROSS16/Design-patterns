<?php

namespace DesignPatterns\Structural\Facade;

class Facade 
{
    public function __construct(private Bios $bios, private OperationSystem $os)
    {
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}