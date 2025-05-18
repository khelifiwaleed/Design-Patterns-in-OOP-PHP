<?php
namespace DesignPatterns\Builder;

class SportsCar implements CarInterface
{
    private string $engine;
    private string $color;
    private int $doors;

    public function setEngine(string $engine): void
    {
        $this->engine = $engine;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    public function show(): void
    {
        echo "Sports Car - Engine: {$this->engine}, Color: {$this->color}, Doors: {$this->doors}\n";
    }
}
