<?php

namespace DesignPatterns\Additional\Repository;

class Post 
{
    public static function draft(PostId $id, string $title, string $text): Post
    {
        return new self(
            $id,
            PostStatus::fromString(PostStatus::STATE_DRAFT),
            $title,
            $text
        );
    }
    
}