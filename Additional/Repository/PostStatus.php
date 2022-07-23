<?php

namespace DesignPatterns\Additional\Repository;

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
}