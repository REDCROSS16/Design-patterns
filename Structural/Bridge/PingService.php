<?php

use DesignPatterns\Structural\Bridge\Service;

class PingService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('pong');
    }
}