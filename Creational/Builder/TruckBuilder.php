<?php
//namespace DesignPatterns\Creational\Builder;
//
//use DesignPatterns\Creational\Builder\Builder\Parts\Door;
//use DesignPatterns\Creational\Builder\Builder\Parts\Engine;
//use DesignPatterns\Creational\Builder\Builder\Parts\Wheel;
//use DesignPatterns\Creational\Builder\Builder\Parts\Truck;
//use DesignPatterns\Creational\Builder\Builder\Parts\Vehicle;
//
//class TruckBuilder implements Builder
//{
//    private Truck $truck;
//
//    public function addDoors()
//    {
//        $this->truck->setPart('rightDoor', new Door());
//        $this->truck->setPart('leftDoor', new Door());
//    }
//
//    public function addEngine()
//    {
//        $this->truck->setPart('truckEngine', new Engine());
//    }
//
//    public function addWheel()
//    {
//        $this->truck->setPart('wheel1', new Wheel());
//        $this->truck->setPart('wheel2', new Wheel());
//        $this->truck->setPart('wheel3', new Wheel());
//        $this->truck->setPart('wheel4', new Wheel());
//        $this->truck->setPart('wheel5', new Wheel());
//        $this->truck->setPart('wheel6', new Wheel());
//    }
//
//    public function createVehicle()
//    {
//        $this->truck = new Truck();
//    }
//
//    public function getVehicle(): Vehicle
//    {
//        return $this->truck;
//    }
//}