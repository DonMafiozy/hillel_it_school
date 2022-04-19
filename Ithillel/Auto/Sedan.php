<?php

namespace Ithillel\Auto;

final class Sedan extends Vehicle
{

    const COUNTRY = 'EN';

    /**
     * @return string
     */
    protected function getName()
    {
        return "<<<" . parent::getName() . '>>>';
    }
}