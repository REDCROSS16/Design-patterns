<?php

namespace DesignPatterns\Behavioral\Visitor;

class User implements Role
{
    public function __construct(private string $name)
    {
    }

    
}