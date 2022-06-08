<?php

use DesignPatterns\Behavioral\NullObject\Logger;

class NullLogger implements Logger
{
    public function log(string $str)
    {
        // do nothing
    }
}