<?php

class JourneyController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/site/index.php');
        if (isset($_POST['quantity']))
        {$this->actionStart();}
    }

    public function actionStart()
    {
        $ship_quantity=$_POST['quantity'];
        $ships_array=[];

        for ($i=0;$i<($ship_quantity);$i++)
        {
            array_push($ships_array, new Ship);
        }
       // array_push($ships_array, new Flagman);

        $result=DistanceEstimate::getDistance($ships_array);
        echo "</br>"."If you will have $ship_quantity spaceships, you can overcome $result light years";
    }
}





