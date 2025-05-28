<?php
  
    class vehicle{
        public $speed = 20;
    }

    $obj = new vehicle;
    $obj2 = new vehicle;

    echo "Vehicle 1 speed : ".$obj->speed."<br>";
    echo "Vehicle 1 speed : ".$obj2->speed."<br>";

    $obj->speed = 80;

    echo "Vehicle 1 speed : ".$obj->speed."<br>";
    echo "Vehicle 1 speed : ".$obj2->speed."<br>";