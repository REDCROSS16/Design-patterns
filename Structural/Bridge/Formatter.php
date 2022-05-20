<?php

namespace DesignPatterns\Structural\Bridge;

interface Formatter
{
    public function format(string $input): string;
}