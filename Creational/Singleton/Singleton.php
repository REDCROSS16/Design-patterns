<?php

namespace DesignPatterns\Creational\Singleton;

final class Singleton
{
    private static ?Singleton $instance = null;


    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function consruct() 
    {

    }

    private function __clone()
    {

    }

    public function __wakeup()
    {
        throw new Exception('Cannot unserialize singleton');
    }
}