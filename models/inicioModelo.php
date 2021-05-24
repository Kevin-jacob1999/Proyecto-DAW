<?php
    class InicioModelo extends Model{
        private $usuario;
        private $clave;
        private $rol;
        
        public function __construct(){
            parent::__construct();
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function getClave(){
            return $this->clave;
        }

        public function getRol(){
            return $this->rol;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function setClave($clave){
            $this->clave = $clave;
        }

        public function setRol($rol){
            $this->rol = $rol;
        }

        //Métodos 
        public function validarLogin(){
            $nivel = "";
            $sql = "SELECT rol FROM usuario WHERE usuario='".$this->usuario."' AND clave='".$this->clave."'";
            $data = $this->getDb()->conexion()->query($sql);

            while($fila = $data->fetch_assoc()){
                $nivel = $fila['rol'];
            }

            return $nivel;
        }
    }
?>