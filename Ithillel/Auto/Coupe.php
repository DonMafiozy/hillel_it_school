<?php

namespace Ithillel\Auto;

final class Coupe extends Vehicle
{

    const COUNTRY = 'IT';

    /**
     * @return string
     */
    protected function getName()
    {
        return '<Luxury ' . $this->getModel() . ' from famous brand ' . $this->getBrand() . '>';
    }
}