<?php 

 class Vehicle{

            public $speed;
            public $acceleration;
            public $wheels;

            public function __construct($speed,$acceleration,$wheels) {
                $this->speed = $speed;
                $this->acceleration = $acceleration;
                $this->wheels = $wheels;
                
            }

            public function allinfo() {
                echo "Speed : ".$this->speed."<br>";
                echo "acceleration : ".$this->acceleration."<br>";
                echo "wheels : ".$this->wheels."<br>";
            }

            
    }

    // Inheritance / Vererbung 
    class car extends vehicle{

    }
    $car = new car($speed= 20,$acceleration= 5,$wheels= 6);
    $car->allinfo();