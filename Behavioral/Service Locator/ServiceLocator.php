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

    <?php

declare(strict_types=1);

namespace DesignPatterns\More\ServiceLocator;

use OutOfRangeException;
use InvalidArgumentException;

class ServiceLocator
{
    /**
     * @var string[][]
     */
    private array $services = [];

    /**
     * @var Service[]
     */
    private array $instantiated = [];

    public function addInstance(string $class, Service $service)
    {
        $this->instantiated[$class] = $service;
    }

    public function addClass(string $class, array $params)
    {
        $this->services[$class] = $params;
    }

    public function has(string $interface): bool
    {
        return isset($this->services[$interface]) || isset($this->instantiated[$interface]);
    }

    public function get(string $class): Service
    {
        if (isset($this->instantiated[$class])) {
            return $this->instantiated[$class];
        }

        $object = new $class(...$this->services[$class]);

        if (!$object instanceof Service) {
            throw new InvalidArgumentException('Could not register service: is no instance of Service');
        }

        $this->instantiated[$class] = $object;

        return $object;
    }
}
