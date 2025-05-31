<?php

    class datbase{

        private $connection;
        private $servername;
        private $username;
        private $password;
        private $dbname;

        public function __construct($servername,$username,$password,$dbname){

            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;

            try {
                $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);

                $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                //echo "Connected ";
            } catch (PDOException $error) {
                echo "Connected Filed :".$error->getMessage();
            }
        }

        public function Close(){
            $this->connection = null;
        }

        public function Insert($table,$fields){
            $index = 0;

            $columns = "";
            $valuename = "";
            $parms = "";

            foreach($fields as $field){
                $rootkey = array_keys($fields)[$index];
                $columns .= $rootkey;

                if ($index < count($fields) - 1) {
                    $columns .= ", ";
                }

                $key = array_keys($field)[0];
                $value = $field[$key];

                $valuename .= $key;

                if ($index < count($fields) - 1) {
                    $valuename .= ", ";
                }

                $params[$key] = $value;

                $index++;
            }

            $query = $this->connection->prepare("
                INSERT INTO $table($columns)
                VALUES($valuename)");

            $query->execute($params);

        }

    }