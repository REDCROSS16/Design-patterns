<?php

namespace DesignPatterns\Structural\Facade2;
/**
 * Подсистема API youtube
 */
class YouTube
{
    public function fetchVideo(): string
    {
        return 'some text';
    }

    public function saveAs(string $path): void 
    {
        // доп методы и классы
    }
}