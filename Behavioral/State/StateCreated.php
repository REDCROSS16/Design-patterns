<?php

namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\State;

class StateCreated implements State
{
    public function proceedToNext(OrderContext $context)
    {
        $context->setState(new StateShipped());
    }

    public function toString(): string
    {
        return 'created';
    }
}