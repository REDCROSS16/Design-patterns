<?php

namespace DesignPatterns\Structural\Composite;

class TextElement implements Renderable
{
    public function __construct(private string $text)
    {
        
    }

    public function render(): string
    {
        return $this->text;
    }
}