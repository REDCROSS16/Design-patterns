<?php

namespace DesignPatterns\Behavioral\Strategy;

interface Comparator
{
    public function compare($a, $b): int;
}