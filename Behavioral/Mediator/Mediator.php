<?php

namespace DesignPatterns\Behavioral\Mediator;

interface Mediator 
{
    public function getUser(int $username): string;
}