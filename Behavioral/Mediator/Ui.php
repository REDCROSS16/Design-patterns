<?php

namespace DesignPatterns\Behavioral\Mediator;

class Ui extends Collegue
{
    public function outputUserInfo(string $username)
    {
        echo $this->mediator->getUser($username);
    }
}
