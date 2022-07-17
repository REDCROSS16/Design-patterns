<?php

namespace DesignPatterns\Additional\Repository;

class PostId 
{
    public static function fromInt(int $id): PostId
    {
        self::ensureIsValid($id);
        return new self($id);
    }

    private function __construct(private int $id)
    {
        
    }
}