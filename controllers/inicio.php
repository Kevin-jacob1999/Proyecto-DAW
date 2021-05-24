<?php
    class Inicio extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $pagina = 'Inicio/viewInicio';
            $this->getView()->loadView($pagina);
        }

        /*public function index(){
            if(!empty($_POST)){
                $this->getModel()->setUsuario($_POST['txtUsuario']);
                $this->getModel()->setClave($_POST['txtClave']);

                $nivel = $this->getModel()->validarLogin();

                if(!empty($nivel)){
                    $_SESSION['usuario'] = $_POST['txtUsuario'];
                    $_SESSION['nivel'] = $nivel;
                    $pagina = 'Inicio/viewInicio';
                    $this->getView()->loadView($pagina);
                }
                else{
                    $pagina = 'Inicio/viewLogin';
                    $this->getView()->loadView($pagina);
                }
            }
            else {
                if(isset($_SESSION['nivel'])){
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
        }*/
    }
?>