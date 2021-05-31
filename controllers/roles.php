<?php
    class Roles extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $pagina = 'Roles/viewRoles';
            $this->getView()->loadView($pagina);
        }

        public function mostrar(){
            $data = $this->getModel()->listarRoles();
            $tr = '';

            foreach ($data as $value) {
                $urlUpdate = constant('URL').'roles/actualizarRol?idRol='.$value['ID_Rol'];
                $urlDelete = constant('URL').'roles/eliminarRol?idRol='.$value['ID_Rol'];
                $tr.= ' <tr class="text-center">
                            <td>'.$value['ID_Rol'].'</td>
                            <td>'.$value['Nombre'].'</td>
                            <td class="text-center">
                                <div  role="group" aria-label="Second group">
                                    <a href="'.$urlDelete.'" class="btn btn-outline-danger" id="btnEliminarRol"><i class="fas fa-trash-alt"></i></a>
                                    <a href="'.$urlUpdate.'" class="btn btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                                </div>
                            </td>
                        </tr>';
            }
            echo $tr;
        }

        public function InsertarRol(){
            if(!empty($_POST)){
                $this->getModel()->setNombre($_POST['txtRol']);
                $respuesta = $this->getModel()->guardarRoles();

                echo $respuesta;
            }
        }

        public function actualizarRol(){
            if(isset($_GET['idRol'])){
                $idR = $_GET['idRol'];
                $this->getModel()->setIdRol($idR);
                $this->getView()->RolID = $this->getModel()->rolFiltrado();

                $pagina = 'Roles/viewUpdateRoles';
                $this->getView()->loadView($pagina);
            }
            else {
                $this->getModel()->setIdRol($_POST['txtID']);
                $this->getModel()->setNombre($_POST['txtRol']);

                $res = $this->getModel()->modificarRol();
                echo $res;
            }
        }

        public function eliminarRol(){
            if(isset($_GET['idRol'])){
                $this->getModel()->setIdRol($_GET['idRol']);

                $res = $this->getModel()->quitarRol();
                echo $res;
            }
        }
    }
?>