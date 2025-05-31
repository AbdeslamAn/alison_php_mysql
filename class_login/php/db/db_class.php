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

                //
            } catch (PDOException $error) {
                echo "Connected Filed :".$error->getMessage();
            }
        }

    }