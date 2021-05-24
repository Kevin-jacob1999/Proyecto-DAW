<?php
    class Database{
        private $host;
        private $user;
        private $password;
        private $database;

        public function __construct(){
            $this->host = 'localhost';
            $this->user = 'root';
            $this->password = '';
            $this->database = 'db_Milla';
        }

        public function conexion(){
            $connect = new mysqli($this->host,$this->user, $this->password,$this->database);
            return $connect;
        }
    }
?>