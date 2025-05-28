<?php

    class vehicle{
            public $speed = 20;
            public $acceleration = 4.6;
            public $wheels = 5;

            public function printallinfo(){
                echo "speed is : ".$this->speed."<br>";
                echo "acceleration is : ".$this->acceleration."<br>";
                echo "number of wheels  are : ".$this->wheels."<br>";

                echo "<br>";
            }
        }

        $obj = new vehicle;
        $obj2 = new vehicle;

        echo "Vehicle 1 stats  <br>";
        $obj->printallinfo();

        echo "Vehicle 2 stats  <br>";
        $obj2->printallinfo();

        $obj->acceleration = 130;

        echo "Vehicle 1 stats  <br>";
        $obj->printallinfo();

        echo "Vehicle 1 stats  <br>";
        $obj2->printallinfo();


        