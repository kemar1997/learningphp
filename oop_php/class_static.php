<?php
    class Car {

        static $wheels = 4;
        var $hood = 1;

        static function MoveWheels(){
            echo "Wheels moved forward";
            echo "<br>";
            Car::$wheels = 10;
        }
    }

    $Car1 = new Car();
    // You can access static variables with this notation
    // below:
    Car::MoveWheels();
    echo Car::$wheels;
    
    // Won't work with static properties
    // $Car1->wheels;
?>