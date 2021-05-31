<?php
    class Usuarios extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->getView()->roles = $this->getModel()->sRoles();
            $pagina = 'Usuarios/viewUsuarios';
            $this->getView()->loadView($pagina);
        }
        
        public function mostrar(){
            $data = $this->getModel()->listarUsuarios();
            $tr = '';
            
            foreach ($data as $value) {
                $urlUpdate = constant('URL').'usuarios/actualizarUsuario?idUsuario='.$value['ID_Usuario'];
                $urlDelete = constant('URL').'usuarios/eliminarUsuario?idUsuario='.$value['ID_Usuario'];
                $tr.= ' <tr class="text-center">
                            <td>'.$value['ID_Usuario'].'</td>
                            <td>'.$value['Usuario'].'</td>
                            <td>'.$value['Contrasena'].'</td>
                            <td>'.$value['ID_Rol'].'</td>
                            <td class="text-center">
                                <div  role="group" aria-label="Second group">
                                    <a href="'.$urlDelete.'" class="btn btn-outline-danger" id="btnEliminarUsuario"><i class="fas fa-trash-alt"></i></a>
                                    <a href="'.$urlUpdate.'" class="btn btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                                </div>
                            </td>
                        </tr>';
            }
            echo $tr;
        }
        
        public function InsertarUsuario(){
            if(!empty($_POST)){
                $this->getModel()->setUsuario($_POST['txtUsuario']);
                $this->getModel()->setContrasena($_POST['txtClave']);
                $this->getModel()->setRol($_POST['sRoles']);

                $respuesta = $this->getModel()->guardarUsuarios();
                echo $respuesta;
            }
        }
        
        public function actualizarUsuario(){
            if(isset($_GET['idUsuario'])){
                $idU = $_GET['idUsuario'];
                $this->getModel()->setIdUsuario($idU);
                $this->getView()->UsuarioID = $this->getModel()->usuarioFiltrado();

                $this->getView()->roles = $this->getModel()->sRoles();
                $pagina = 'Usuarios/viewUpdateUsuarios';
                $this->getView()->loadView($pagina);
            }
            else {
                $this->getModel()->setIdUsuario($_POST['txtIDUser']);
                $this->getModel()->setUsuario($_POST['txtUsuario']);
                $this->getModel()->setContrasena($_POST['txtClave']);
                $this->getModel()->setRol($_POST['sRol']);

                $res = $this->getModel()->modificarUsuario();
                echo $res;
            }
        }
        
        public function eliminarUsuario(){
            if(isset($_GET['idUsuario'])){
                $this->getModel()->setIdUsuario($_GET['idUsuario']);

                $res = $this->getModel()->quitarUsuario();
                echo $res;
            }
        }
    }
?>