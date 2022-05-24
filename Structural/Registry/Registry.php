<?php

namespace DesignPatterns\Structural\Registry;

use DesignPatterns\Structural\Bridge\Service;
use InvalidArgumentException;

abstract class Registry
{
    public const LOGGER = 'logger';

    private static array $services = [];
    private static array $allowedKeys = [
        self::LOGGER
    ];

    public static function set(string $key, Service $value)
    {
        if (!in_array($key, self::$allowedKeys)) {
            throw new InvalidArgumentException('INVALID KEY GIVEN!!!!');
        }

        self::$services[$key] = $value;
    }

    public static function get(string $key): Service
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$services[$key])) {
            throw new InvalidArgumentException('Нету такого ключа!');
        }

        return self::$services[$key];
    }

}