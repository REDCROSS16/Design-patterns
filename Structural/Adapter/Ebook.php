<?php

namespace DesignPatterns\Structural\Adapter;

interface Ebook
{
    public function unlock();

    public function pressNext();

    public function getPage(): array;
}
