<?php
namespace DesignPatterns\Creational\Builder;

class CarDirector
{
    public function buildFamilyCar(CarBuilder $builder): CarInterface
    {
        return $builder
            ->setEngine("Hybrid")
            ->setColor("Blue")
            ->setDoors(5)
            ->build();
    }

    public function buildSportsCar(CarBuilder $builder): CarInterface
    {
        return $builder
            ->setEngine("V8")
            ->setColor("Red")
            ->setDoors(2)
            ->build();
    }
}
