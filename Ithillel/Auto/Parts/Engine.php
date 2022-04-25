<?php

namespace Ithillel\Auto\Parts;

class Engine
{
    const ENGINE_TYPE_FUEL = 0;

    const ENGINE_TYPE_ELECTRIC = 1;

    const ENGINE_TYPE_HYBRID = 2;

    const ENGINE_TYPE_DIESEL = 3;

    protected $type;

    public function __construct(int $type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    public function start()
    {
        echo 'Engine On' . PHP_EOL;
    }

    public function stop()
    {
        echo 'Engine Off' . PHP_EOL;
    }
}