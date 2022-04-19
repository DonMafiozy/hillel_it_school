<?php

namespace Ithillel\Auto;
abstract class VehicleAbstract
{
    const VEHICLE_STATUS_MOT_MOVE = 0;

    const VEHICLE_STATUS_WAITING = 1;

    const VEHICLE_STATUS_MOVE = 2;

    protected static $drivingWheels = 2;

    protected $maxSpeed;

    protected $currentSpeed;

    protected $status;

    protected $brand;

    protected $model;

    protected $statuses = [
        self::VEHICLE_STATUS_MOT_MOVE => 'Vehicle is stopped',
        self::VEHICLE_STATUS_WAITING => 'Vehicle waiting',
        self::VEHICLE_STATUS_MOVE => 'Vehicle is moving',
    ];

    public function __construct($brand, $model, $maxSpeed)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->maxSpeed = $maxSpeed;
        $this->setCurrentSpeed(0);
        $this->setStatus(self::VEHICLE_STATUS_MOT_MOVE);

    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @return mixed
     */
    protected function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @param mixed $currentSpeed
     */
    protected function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @param mixed $status
     */
    protected function setStatus($status)
    {
        if (in_array($status, array_keys($this->statuses))) {
            $this->status = $status;
        } else {
            echo 'ERROR; Wrong status!';
        }
    }

    /**
     * @return mixed
     */
    protected function getStatus()
    {
        return $this->status;
    }


    /**
     * @return mixed
     */
    protected function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    protected function getModel()
    {
        return $this->model;
    }

    protected function getName()
    {
        return $this->getBrand() . ' - ' . $this->getModel();
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'The Car ' . $this->getName() . ' has ' . self::getDrivingWheels() . ' driving wheels' . PHP_EOL;
    }

    public static function getDrivingWheels()
    {
        return self::$drivingWheels;
    }

}

