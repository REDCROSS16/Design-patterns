<?php

namespace DesignPatterns\Behavioral\Mediator;

interface Mediator 
{
    public function getUser(string $username): string;
}