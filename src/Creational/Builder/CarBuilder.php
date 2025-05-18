<?php
namespace DesignPatterns\Creational\Builder;

class CarBuilder
{
    private CarInterface $car;

    public function __construct(CarInterface $car)
    {
        $this->car = $car;
    }

    public function setEngine(string $engine): self
    {
        $this->car->setEngine($engine);
        return $this;
    }

    public function setColor(string $color): self
    {
        $this->car->setColor($color);
        return $this;
    }

    public function setDoors(int $doors): self
    {
        $this->car->setDoors($doors);
        return $this;
    }

    public function build(): CarInterface
    {
        return $this->car;
    }
}
