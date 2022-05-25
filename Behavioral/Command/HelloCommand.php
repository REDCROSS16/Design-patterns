<?php

namespace DesignPatterns\Behavioral\Command;

use DesignPatterns\Behavioral\Command\Command;

class HelloCommand implements Command
{
    public function __construct(private Receiver $output)
    {
    }

    public function execute()
    {
        $this->output->write('Hello World');
    }
}