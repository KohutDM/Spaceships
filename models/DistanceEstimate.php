<?php

class DistanceEstimate
{
    static public function getDistance($s_array)
    {
        $ships_quantity = count($s_array);
        $distance = 0;
        $burnt_fuel = 0;
        $space_route = [];
        $key = 0;
        for ($i = $ships_quantity; $i >= 1; $i--) {
            $burnt_fuel = 1 / $i;
            $burnt_fuel *= 100;
            array_push($space_route, $burnt_fuel);
        }
        foreach ($s_array as $ship) {
            $i=$ships_quantity;
            $ship->BurnFuel($space_route[$key]);
            $ship->AddFuel($ship->getFuel() / $i);
            $distance += $ship->getDistance_one();
            $key++;
            $i--;
        }
        return $distance;
    }

}
