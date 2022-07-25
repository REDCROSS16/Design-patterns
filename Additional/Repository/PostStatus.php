<?php

namespace DesignPatterns\Additional\Repository;

use InvalidArgumentException;

class PostStatus
{
    public const STATE_DRAFT_ID = 1;
    public const STATE_PUBLISHED_ID = 2;

    public const STATE_DRAFT = 'draft';
    public const STATE_PUBLISHED = 'published';

    private static array $validStates = [
        self::STATE_DRAFT_ID => self::STATE_DRAFT,
        self::STATE_PUBLISHED_ID => self::STATE_PUBLISHED
    ];

    public static function formInt(int $statusId)
    {
        self::ensureIsValidId($statusId);

        return new self($statusId, self::$validStates[$statusId]);
    }

    public static function fromString(string $status)
    {
        self::ensureValidName($status);
        $state = array_search($status, self::$validStates);

        if ($state === false) {
            throw new InvalidArgumentException('Invalid state givern');
        }

        return new self($state, $status);
    }

    private function __construct(
        private string $name,
        private int $id
    )
    {   
    }

    public function toInt(): int
    {
        return $this->id;
    }

    public function toString(): string
    {
        return $this->name;
    }

    private static function ensureIsValidID(int $status)
    {
        if (!in_array($status, array_keys(self::$validStates), true)) { 
            throw new InvalidArgumentException('Invalid status id is given');
        }
    }

    private static function ensureIsValidName(string $status)
    {
        if (!in_array($status, self::$validStates)) {
            throw new InvalidArgumentException('Invalid status name is given');
        }
    }
}