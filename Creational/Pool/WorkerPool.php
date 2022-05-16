<?php

namespace DesignPatterns\Creational\Pool;

use Countable;

class WorkerPool 
{
    /**
     * @var StringReverseWorker[]
     */
    private array $occupiedWorkers = [];

    /**
     * @var StringReverseWorker
     */
    private array $freeWorkers = [];


    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) === 0)
    }

}

