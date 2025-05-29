<?php


    class Vehicle{

            public $speed;
            public $acceleration;
            public $wheels;

            public function __construct() {
                $this->speed = 20;
                $this->acceleration = 4;
                $this->wheels = 5;
                echo "<div style='color:red'>Hallo Welt</div>";
            }

            public function allinfo(){
                echo $this->speed."<br>";
                echo $this->acceleration."<br>";
                echo $this->wheels."<br>";
            }
    }

    $vehicle = new Vehicle();
    $vehicle->allinfo();