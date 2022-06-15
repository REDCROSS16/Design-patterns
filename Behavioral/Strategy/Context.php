<?php

namespace DesignPatterns\Behavioral\Strategy;

class Context
{
    public function __construct(private Comparator $comparator)
    {
    }

    public function executeStategy( array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}