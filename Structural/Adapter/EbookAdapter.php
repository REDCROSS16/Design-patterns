<?php

namespace DesignPatterns\Structural\Adapter;


class EbookAdapter implements Book
{
    public function __construct(protected Ebook $eBook)
    {
    }

    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}