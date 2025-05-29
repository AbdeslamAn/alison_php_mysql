<?php

class Auto {
    public function __construct() {
        echo "🚗 Das Auto wurde gestartet.\n";
    }

    public function __destruct() {
        echo "🛑 Das Auto wurde gestoppt.\n";
    }
}

$auto = new Auto();
echo "🚦 Das Auto fährt...\n";

