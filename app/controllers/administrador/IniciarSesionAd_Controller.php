<?php
    class IniciarSesionAd_Controller extends Controller_Ad{
        public function  __construct (){
            $this->vista('iniciarSesionAd');
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
                //header('Location: '.RUTA_URL.'/Paginas_Controller/indexAd');
                echo "<script>window.location.href='".RUTA_URL."/Paginas_Controller_Ad'</script>";
            }
            else{
                echo "<script>alert('$verificar[1]');</script>";
                $this->vista('iniciarSesionAd');
            }
        }
    }
?>