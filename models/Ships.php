<?php
Abstract class Ships
{
    private $fuel = 100;
    private $distance_one;
    private $b_fuel;

    public function BurnFuel($burnt_fuel)
    {
        if (($this->fuel - $burnt_fuel) > 0) {
            $this->fuel -= $burnt_fuel;
            $this->b_fuel = $burnt_fuel;
        } else
            echo "I`m empty";
    }

    public function addFuel($added_fuel)
    {
        if ($this->fuel < 100) {
            $this->fuel += $added_fuel;

        } else
            echo "My tank is full";
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function setDistance_one()
    {
        if ($this->fuel>=0 and $this->fuel<100 or $this->fuel=100)
        {
            $this->distance_one = $this->b_fuel;
        }
    }
    public function getDistance_one()
    {
        return $this->distance_one;
    }
}