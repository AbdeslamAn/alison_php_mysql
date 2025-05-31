<?php

    require_once("db_class.php");

    class user{
        private $db;

        public function __construct(){
            $this->db = new datbase("localhost","root","","alison_kurs_php");
        }
    }