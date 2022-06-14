<?php

namespace DesignPatterns\Behavioral\State;

class StateDone implements State
{
    public function proceedToNext(OrderContext $context)
    {
        // no more, all done
    }

    public function toString(): string
    {
        return 'done';    
    }
}