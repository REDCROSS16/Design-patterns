<?php

namespace DesignPatterns\Creational\StaticFactory;

use DesignPatterns\Creational\StaticFactory\Formatter;

class FormatNumber implements Formatter
{
    public function format(string $input): string
    {
        return number_format((int) $input);
    }
}