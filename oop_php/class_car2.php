<?php
    class Car {
        function MoveWheels(){
            echo "Wheels moved forward";
        }
    }

    if (method_exists("Car", "MoveWheels")) {
        echo "The Car class exists. Also, the MoveWheels method exists.";
    } else {
        echo "The Car class does not exist.";
    }
?>