<?php
    class usuariosModelo extends Model{
        private $idUsuario;
        private $usuario;
        private $contrasena;
        private $rol;

        public function __construct(){
            parent::__construct();
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function getContrasena(){
            return $this->contrasena;
        }

        public function getRol(){
            return $this->rol;
        }

        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function setContrasena($contrasena){
            $this->contrasena = $contrasena;
        }

        public function setRol($rol){
            $this->rol = $rol;
        }

        //Métodos 
        

        public function listarUsuarios(){
            $arreglo = [];
            $sql = "SELECT u.ID_Usuario, u.Usuario, u.Contrasena, r.Nombre AS ID_Rol FROM usuario u INNER JOIN rol r ON r.ID_Rol=u.ID_Rol";
            $data = $this->getDb()->conexion()->query($sql);

            while($fila = $data->fetch_object()){
                $arreglo[] = json_decode(json_encode($fila), true);
            }
            return $arreglo;
        }

        public function sRoles(){
            $arreglo = [];
            $sql = "SELECT * FROM rol";
            $data = $this->getDb()->conexion()->query($sql);

            while($fila = $data->fetch_object()){
                $arreglo[] = json_decode(json_encode($fila), true);
            }
            return $arreglo;
        }
        
        public function guardarUsuarios(){
            $sql = "INSERT INTO usuario(Usuario,Contrasena,ID_Rol) VALUES('".$this->usuario."',".$this->contrasena.",".$this->rol.")";
            $res = $this->getDb()->conexion()->query($sql);

            return ($res===TRUE)?true:false;
        }
        
        public function usuarioFiltrado(){
            $arreglo = [];
            $sql = "SELECT * FROM usuario WHERE ID_Usuario=".$this->idUsuario;
            $data = $this->getDb()->conexion()->query($sql);

            while($fila = $data->fetch_object()){
                $arreglo[] = json_decode(json_encode($fila), true);
            }
            return $arreglo;
        }
        
        public function modificarUsuario(){
            $sql = "UPDATE usuario SET Usuario='".$this->usuario."', Contrasena='".$this->contrasena."', ID_Rol=".$this->rol." WHERE ID_Usuario=".$this->idUsuario;
            $res = $this->getDb()->conexion()->query($sql);

            return ($res===TRUE)?true:false;
        }

        
        public function quitarUsuario(){
            $sql = "DELETE FROM usuario WHERE ID_Usuario=".$this->idUsuario;
            $res = $this->getDb()->conexion()->query($sql);

            return ($res===TRUE)?true:false;
        }
    }
?>