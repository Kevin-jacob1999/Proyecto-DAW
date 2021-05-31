<?php
    class Inicio extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            if(!empty($_POST)){
                $this->getModel()->setUsuario($_POST['txtUsuario']);
                $this->getModel()->setClave($_POST['txtClave']);

                $rol = $this->getModel()->validarLogin();
                //$iduser = $this->getModel()->obtenerId();

                if(!empty($rol)){
                    $_SESSION['usuario'] = $_POST['txtUsuario'];
                    $_SESSION['rol'] = $rol;
                    $pagina = 'Inicio/viewInicio';
                    $this->getView()->loadView($pagina);
                }
                else{
                    $pagina = 'Inicio/viewLogin';
                    $this->getView()->loadView($pagina);
                }
            }
            else {
                if(isset($_SESSION['rol'])){
                    $pagina = 'Inicio/viewInicio';
                    $this->getView()->loadView($pagina);
                }
                else{
                    $pagina = 'Inicio/viewLogin';
                    $this->getView()->loadView($pagina);
                }
                
            }
        }

        public function login(){
            $pagina = 'Inicio/viewLogin';
            $this->getView()->loadView($pagina);
        }

        public function logout(){
            session_destroy();
            $pagina = 'Inicio/viewLogin';
            $this->getView()->loadView($pagina);
        }
    }
?>
