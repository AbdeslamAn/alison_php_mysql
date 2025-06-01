<?php

    require_once("db_class.php");

    class user{
        private $db;

        public function __construct(){
            $this->db = new datbase("localhost","root","","alison_kurs_php");
        }

        public function register($username,$email,$password,$confirmpassword) {

            $password = password_hash($password, PASSWORD_DEFAULT);

            $fields = array(
                "user_name" => array(":user_name" => $username),
                "email" => array(":email" => $email),
                "password" => array(":password" => $password),
            );
           
            $this->db->Insert("user1",$fields);
        }
    }