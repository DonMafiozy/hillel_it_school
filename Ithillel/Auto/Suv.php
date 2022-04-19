<?php

namespace Ithillel\Auto;

final class Suv extends Vehicle
{
    const COUNTRY = 'ET';

    /**
     * @return string
     */
    protected function getName()
    {
        return "<<<" . parent::getName() . '>>>';
    }

    /**
     * @return int
     */
    public static function getDrivingWheels()
    {
        return 4;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'The Car ' . $this->getName() . ' has ' . self::getDrivingWheels() . ' driving wheels and country creator is ' . self::COUNTRY ;
    }
}