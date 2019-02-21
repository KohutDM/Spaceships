<?php

class DistanceEstimate
{
    static public function getDistance($s_array)
    {
        $ships_quantity = count($s_array);
        //echo $ships_quantity. "<=ship_quantity"."</br></br>";
        $distance = 0;
        $space_route = [];
        $key = 0;
        for ($i = $ships_quantity; $i >= 1; $i--) {
            $burnt_fuel = 1 / $i;
            $burnt_fuel *= 100;
            array_push($space_route, $burnt_fuel);
        }

        //print_r($space_route);echo "<=space_route"."</br></br>";
        //print_r($s_array);echo "<=ship_object"."</br></br>";

        for ($a=$ships_quantity;$a>1;$a--)
        {
            foreach ($s_array as $ship)
            {
            $ship->BurnFuel($space_route[$key]);
                //echo $ship->getFuel()."</br>";
            $ship->addFuel($ship->getFuel()/($a-1));
                //echo $ship->getFuel()."</br>";
            $ship->setDistance_one();
            }

            //var_dump($s_array);echo "<=ship_object_after_first_stop"."</br>";;
            //echo $ship->getFuel()."</br>";

        array_shift($s_array);
            //echo $ship->getDistance_one()."</br>";
        $distance += $ship->getDistance_one();
        $key++;
        }
        if ($ships_quantity>0)
        {$distance+=100;}
        return $distance;
    }

}
