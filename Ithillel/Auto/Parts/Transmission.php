<?php
namespace Ithillel\Auto\Parts;

class Transmission
{
    const TRANSMISSION_TYPE_MANUAL = 0;

    const TRANSMISSION_TYPE_AUTOMATIC = 1;

    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $gears;

    private $activeGear = 0;

    public function __construct(int $type, int $gears)
    {
        $this->type = $type;
        $this->gears = $gears;
    }

   public function changeGear(int $gear)
   {
        $this->activeGear = $gear;
   }

   public function getGears()
   {
       return $this->gears;
   }

}
