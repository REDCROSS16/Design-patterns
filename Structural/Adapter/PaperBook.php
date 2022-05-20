<?php

namespace DesignPatterns\Structural\Adapter;

class PaperBook implements Book
{
    private int $page;

    public function open(): void
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}