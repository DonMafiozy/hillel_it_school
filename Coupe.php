<?php
final class Coupe extends Vehicle
{
    protected function getName()
    {
        return '<Luxury ' . $this->getModel() . ' from famous brand ' . $this->getBrand() . '>';
    }
}