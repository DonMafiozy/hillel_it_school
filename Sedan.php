<?php

final class Sedan extends Vehicle
{
    protected function getName()
    {
        return "<<<" . parent::getName() . '>>>';
    }
}