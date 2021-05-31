<?php
    class rolesModelo extends Model{
        private $idRol;
        private $nombre;

        public function __construct(){
            parent::__construct();
        }

        public function getIdRol(){
            return $this->idRol;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setIdRol($idRol){
            $this->idRol = $idRol;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function listarRoles(){
            $arreglo = [];
            $sql = "SELECT * FROM rol";
            $data = $this->getDb()->conexion()->query($sql);

            while($fila = $data->fetch_object()){
                $arreglo[] = json_decode(json_encode($fila), true);
            }
            return $arreglo;
        }

        
        public function guardarRoles(){
            $sql = "INSERT INTO rol(Nombre) VALUES('".$this->nombre."')";
            $res = $this->getDb()->conexion()->query($sql);

            return ($res===TRUE)?true:false;
        }
        
        public function rolFiltrado(){
            $arreglo = [];
            $sql = "SELECT * FROM rol WHERE ID_Rol=".$this->idRol;
            $data = $this->getDb()->conexion()->query($sql);

            while($fila = $data->fetch_object()){
                $arreglo[] = json_decode(json_encode($fila), true);
            }
            return $arreglo;
        }
        
        public function modificarRol(){
            $sql = "UPDATE rol SET nombre='".$this->nombre."' WHERE ID_Rol=".$this->idRol;
            $res = $this->getDb()->conexion()->query($sql);

            return ($res===TRUE)?true:false;
        }
        
        public function quitarRol(){
            $sql = "DELETE FROM rol WHERE ID_Rol=".$this->idRol;
            $res = $this->getDb()->conexion()->query($sql);

            return ($res===TRUE)?true:false;
        }
    }
?>