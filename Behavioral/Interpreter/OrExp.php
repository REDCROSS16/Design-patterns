<?php

namespace DesignPatterns\Behavioral\Interpreter;

use DesignPatterns\Behavioral\Interpreter\AbstractExp;

class OrExp implements AbstractExp
{
    public function __construct(private AbstractExp $first, private AbstractExp $second)
    {
    }

    public function interpret( Context $context): bool
    {
        return $this->first->interpret($context) || $this->second->interpret($context);
    }
}
