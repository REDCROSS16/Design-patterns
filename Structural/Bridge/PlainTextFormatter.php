<?php

use DesignPatterns\Structural\Bridge\Formatter;

class PlainTextFormatter implements Formatter
{
    public function format(string $input): string
    {
        return $input;
    }
}