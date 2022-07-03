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
}