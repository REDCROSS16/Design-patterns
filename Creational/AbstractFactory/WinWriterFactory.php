<?php

namespace DesignPatterns\Creational\AbstractFactory;

class WinWriterFactory implements WriterFactory
{
    public function createCsvWriter()
    {
        return new WinCsvWriter();
    }

    public function createJsonWriter()
    {
        return new WinJsonWriter();
    }
}