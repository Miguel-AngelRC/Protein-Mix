<?php
    class IniciarSesionAd_Controller extends Controller{
        public function  __construct (){
            $this->vista('pages/iniciarSesionAd');
        }

        //carga pagina index metodo por default
        public function index(){
            
        }

        //Verifica si el  Administrador ya está registrado
        public function validarRegistro (){  
            //se incluye y crea una instancia del modelo RegistrarAdministrador
            $iniciarSesion = $this->modelo('IniciarSesionAd_Model');

            $verificar = $iniciarSesion->validarDatos() ;

            if ($verificar[0]) {
                header('Location: '.RUTA_URL.'/Paginas_Controller');
                // $this->vista('pages/paginaPrincipal');
            }
            else{
                echo "<script>alert('$verificar[1]');</script>";
                $this->vista('pages/iniciarSesionAd');
            }
        }
    }
?>