<?php

namespace Ithillel\Auto\Accessories;

class Accessory extends AccessoryAbstract implements AccessoriesInterface
{
    protected $name;

    protected $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}