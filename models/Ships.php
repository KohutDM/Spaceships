<?php
Abstract class Ships
{
    public $fuel=100;
    public $distance_one;

    public function BurnFuel($burnt_fuel)
    {
        if ($this->fuel>0){
        $this->fuel -= $burnt_fuel;
        $this->distance_one=$burnt_fuel;}
        else
        echo "I`m empty";
    }

    public function addFuel($added_fuel)
    {
        if ($this->fuel<=100){
        $this->fuel += $added_fuel;}
        else
        echo "My tank is full";
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function getDistance_one()
    {
        return $this->distance_one;
    }
}