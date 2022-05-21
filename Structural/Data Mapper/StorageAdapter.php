<?php

namespace DesignPatterns\Structural\DataMapper;

class StorageAdapter
{
    public function __construct(private array $data)
    {
        
    }

    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}
