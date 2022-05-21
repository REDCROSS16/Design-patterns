<?php

namespace DesignPatterns\Structural\Facade;

interface Bios 
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OperationSystem $os);

    public function powerDown();
}