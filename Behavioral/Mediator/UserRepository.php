<?php

namespace DesignPatterns\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\Collegue;

class UserRepository extends Collegue
{
    public function getUserName( string $user): string
    {
        return 'User: ' . $user;
    }
}