<?php

namespace Ithillel\Auto;

use Ithillel\Auto\Parts\Engine;
use Ithillel\Auto\Parts\Transmission;

final class Coupe extends Vehicle
{

    const COUNTRY = 'IT';

    public function __construct($brand, $model, $maxSpeed, array $accessories)
    {
        parent::__construct($brand, $model, $maxSpeed, $accessories);
        $this->engine = new Engine(Engine::ENGINE_TYPE_FUEL);
        $this->transmission = new Transmission(Transmission::TRANSMISSION_TYPE_AUTOMATIC, 6);
    }

    /**
     * @return string
     */
    protected function getName()
    {
        return '<Luxury ' . $this->getModel() . ' from famous brand ' . $this->getBrand() . '>';
    }

    public function start()
    {
        if ($this->getStatus() == self::VEHICLE_STATUS_MOT_MOVE) {
            $this->engine->start();
            $this->setStatus(self::VEHICLE_STATUS_WAITING);
            echo $this->getName() . ' ready for moving' . PHP_EOL;
        } else {
            echo 'Engine already started' . PHP_EOL;
        }
    }

    public function stop()
    {
        if ($this->getStatus() == self::VEHICLE_STATUS_WAITING || $this->getStatus() == self::VEHICLE_STATUS_MOVE) {
            $this->engine->stop();
            $this->setStatus(self::VEHICLE_STATUS_MOT_MOVE);
            echo $this->getName() . ' Stopped' . PHP_EOL;
        } else {
            echo 'Engine already stopped' . PHP_EOL;
        }
    }

}