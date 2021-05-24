<?php
    class Model{
        private $database;

        public function __construct(){
            $this->database = new Database();
        }

        public function getDb(){
            return $this->database;
        }

        public function setDb($db){
            $this->database = $db;
        }
    }
?>