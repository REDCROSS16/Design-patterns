<?php

namespace DesignPatterns\Behavioral\ServiceLocator;

class ServiceLocator
{
    private array $services = [];

    private array $instantiated = [];
}