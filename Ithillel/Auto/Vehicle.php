<?php

namespace Ithillel\Auto;

class Vehicle extends VehicleAbstract implements MovableInterface
{

    const CAR_MIN_SPEED = 0;

    public function start()
    {
        if ($this->getStatus() == self::VEHICLE_STATUS_MOT_MOVE) {
            $this->setStatus(self::VEHICLE_STATUS_WAITING);
            echo $this->getName() . ' ready for moving' . PHP_EOL;
        } else {
            echo 'Engine already started' . PHP_EOL;
        }
    }

    public function stop()
    {
        if ($this->getStatus() == self::VEHICLE_STATUS_WAITING || $this->getStatus() == self::VEHICLE_STATUS_MOVE) {
            $this->setStatus(self::VEHICLE_STATUS_MOT_MOVE);
            echo $this->getName() . ' Stopped' . PHP_EOL;
        } else {
            echo 'Engine already stopped' . PHP_EOL;
        }
    }

    public function up(int $unit)
    {
        if ($this->getStatus() == self::VEHICLE_STATUS_MOT_MOVE) {
            echo 'Cant increase speed, before need to use Start() ' . PHP_EOL;
            return;
        }

        if ($unit === self::CAR_MIN_SPEED) {
            echo 'Can not increase speed to ' . self::CAR_MIN_SPEED . PHP_EOL;
            return;
        }

        if ($this->getCurrentSpeed() === self::CAR_MIN_SPEED) {
            $this->setStatus(self::VEHICLE_STATUS_MOVE);
        }

        $speed = $this->getCurrentSpeed() + $unit;

        if ($speed >= $this->getMaxSpeed()) {
            $this->setCurrentSpeed($this->getMaxSpeed());
            echo 'Can not increase more, speed increased to maximum: ' . $this->getMaxSpeed() . PHP_EOL;
            return;
        }

        $this->setCurrentSpeed($speed);
        echo 'Speed up to:' . $unit . ' and increased to:' . $speed . PHP_EOL;
    }

    public function down(int $unit)
    {
        if ($this->getStatus() == self::VEHICLE_STATUS_MOT_MOVE) {
            echo 'Can not decrease speed, before need to use start() and up() ' . PHP_EOL;
            return;
        }

        if ($unit === self::CAR_MIN_SPEED) {
            echo 'Cant decrease speed to ' . self::CAR_MIN_SPEED . PHP_EOL;
            return;
        }

        $difference = ($this->getCurrentSpeed() - $unit);
        if ($difference <= self::CAR_MIN_SPEED) {
            $this->setCurrentSpeed($this->getMaxSpeed());
            echo 'Can  not decrease more, speed decreased to minimum: ' . self::CAR_MIN_SPEED . PHP_EOL;
            return;
        }

        $this->setCurrentSpeed($difference);
        echo 'Speed down by:' . $unit . ' and decreased to: ' . $difference . PHP_EOL;

    }
}