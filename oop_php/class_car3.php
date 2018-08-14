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
    $truck = new Car();
    echo $Car1->wheels . "<br><br>";
    echo "<h4>Truck Info:</h4><br> Wheels = ". $truck->wheels = 10 . "<br>";
    $truck->CreateDoors();
    echo "Doors = " . $truck->doors . "<br>";
    
?>