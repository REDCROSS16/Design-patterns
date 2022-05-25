<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\Responisble;

use DesignPatterns\Behavioral\ChainOfResponsibility\Handler;

class SlowDatabaseHandler extends Handler
{
    protected function processing(RequestInterface $request): ?string
    {
        return 'Hello world';
    }
}