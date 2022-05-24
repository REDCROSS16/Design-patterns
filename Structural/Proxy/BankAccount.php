<?php

namespace DesignPatterns\Structural\Proxy;

interface BankAccount 
{
    public function deposit(int $amout);

    public function getBalance(): int;
}