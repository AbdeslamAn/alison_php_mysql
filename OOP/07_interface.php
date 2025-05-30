<?php

        interface Fahrbar {
        public function starten();
        public function stoppen();
    }

    class Auto implements Fahrbar {
        public function starten() {
            echo "🚗 Auto startet\n";
        }

        public function stoppen() {
            echo "🛑 Auto stoppt\n";
        }
    }

    $meinAuto = new Auto();
    $meinAuto->starten();
    $meinAuto->stoppen();
