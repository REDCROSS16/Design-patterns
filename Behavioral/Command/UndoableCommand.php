<?php

namespace DesignPatterns\Behavioral\Command;

use DesignPatterns\Behavioral\Command\Command;

interface UndoableCommand extends Command
{
    public function undo();
}