<?php
    class Car {

        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;

        function MoveWheels(){
            echo "Wheels moved forward";
            echo "<br>";
            $this->wheels = 10;
        }

        function CreateDoors(){
            $this->doors = 6;
        }
    }

    $Car1 = new Car();

    class Plane extends Car {
        var $wheels = 20;
    }

    $jet = new Plane();
    // $jet->MoveWheels();
    echo $jet->wheels;
?>