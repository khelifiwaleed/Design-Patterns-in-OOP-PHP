<?php
namespace DesignPatterns\Builder;

interface CarInterface
{
    public function setEngine(string $engine): void;
    public function setColor(string $color): void;
    public function setDoors(int $doors): void;
    public function show(): void;
}
