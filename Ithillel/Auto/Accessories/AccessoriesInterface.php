<?php
namespace Ithillel\Auto\Accessories;

interface AccessoriesInterface
{

    /**
     * @return string
     */
    public function getName():string;

    /**
     * @return int
     */
    public function getPrice():int;
}