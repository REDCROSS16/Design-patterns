<?php
namespace DesignPatterns\Creational\StaticFactory;

use DesignPatterns\Creational\StaticFactory\Formatter;

class FormatString implements Formatter
{
    public function format(string $input): string
    {
        return $input;
    }
}