<?php

namespace DesignPatterns\Behavioral\ServiceLocator;

class ServiceLocator
{
    private array $services = [];

    private array $instantied = [];
    
    public function addInstance(string $class, Service $service)
    {
        $this->instantied[$class] = $service; 
    }

    public function addClass(string $class, array $params)
    {
        $this->services[$class] = $params;
    }

    public function has(string $interface): bool
    {
        return isset($this->services[$interface]) || isset($this->instantied[$interface]);
    }
}