<?php

use DesignPatterns\Behavioral\NullObject\Logger;

class PrintLogger implements Logger
{
    public function log(string $str)
    {
        echo $str;
    }
}