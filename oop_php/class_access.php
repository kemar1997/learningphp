<?php
    class Car {

        // public properties can be used anywhere
        public $wheels = 4;
        // protected properties can only be used in classes
        // and subclasses or methods
        protected $hood = 1;
        // can only be used in its own class cant be used
        // outside of the class it was defined in
        private $engine = 1;
        var $doors = 4;

        function ShowProperty(){
            echo "Wheels moved forward";
            echo "<br>";
            $this->wheels = 10;
            echo $this->hood;
            echo "<br>";
            echo $this->engine;
        }
    }

    $Car1 = new Car();
    // echo $Car1->ShowProperty();
    $semi = new Semi();

    class Semi extends Car {
    
    }

    echo $semi->ShowProperty();
?>