<?php

use DesignPatterns\Structural\Adapter\Ebook;

class Kindle implements Ebook
{
    private int $page = 1;
    private int $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
        
    }

    // метод возвращает страницы в виде 10 из 100 для примера
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}