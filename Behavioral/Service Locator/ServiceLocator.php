<?php

namespace DesignPatterns\Behavioral\ServiceLocator;

use InvalidArgumentException;

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

    public function get(string $class): Service
    {
        if (isset($this->instantied[$class])) {
            return $this->instantied[$class];
        }

        $object = new $class(...$this->instantied[$class]);

        if (!$object instanceof Service) {
            throw new InvalidArgumentException('Could not registred');
        }

        $this->instantied[$class] = $object;

        return $object;
    }
}