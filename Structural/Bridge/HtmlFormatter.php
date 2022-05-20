<?php

namespace DesignPatterns\Structural\Bridge;

class HtmlFormatter implements Formatter
{
    public function format(string $input): string
    {
        return sprintf('<p>%s</p>', $input);
    }
}