<?php

namespace Ithillel\Auto;

class Driver
{
    private $name;

    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function move(MovableInterface $car, string $destination)
    {
        $car->start();
        $car->up(100);
        $car->up(160);
        $car->down(100);
        $car->down(60);
        $car->stop();

        echo 'Driver ' . $this->getName() .' arrived to ' . $destination;
    }
}