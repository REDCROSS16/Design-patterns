<?php
namespace DesignPatterns\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\Mediator;

abstract class Collegue
{
    protected Mediator $mediator;

    public function setMediator( $mediator) 
    {
        $this->mediator = $mediator;
    }
}