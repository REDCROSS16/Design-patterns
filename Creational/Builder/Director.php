<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;
/**
 * Директору прокидываем строителя и получаем технику :)
 */
class Director
{
   public function build(Builder $builder): Vehicle
   {
       $builder->createVehicle();
       $builder->addDoors();
       $builder->addEngine();
       $builder->addWheel();

       return $builder->getVehicle();
   }
}