<?php
    class Car {

        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;

        function __construct(){
            echo "Wheels moved forward";
            echo "<br>";
            echo $this->wheels = 10;
        }
    }

    $Car1 = new Car();
?>