<?php

    class RegistrarU_Controller extends Controller_Us{
        
        public function  __construct (){
            $this->vista('index');
        }

        //carga pagina index (registrar usuarios) metodo por default
        public function index(){

        }

        //Registra usuario
        public function registrarUsuario (){
            //se incluye y crea una instancia del modelo RegistrarUsuario
            $registrar = $this->modelo('RegistrarU_Model');

            if ($registrar->verificarExistencia()) {
                echo "<script>alert('El usuario ya existe.');</script>";//ventana emergente
                $this->vista('index');
            }else{
                    if ($registrar->insertarUsuario()) {
                        echo "<script>alert('Felicidades te has registrado.');</script>";//ventana emergente
                        //header('Location: '.RUTA_URL.'/IniciarSesionU_Controller');
                        echo "<script>window.location.href='".RUTA_URL."/IniciarSesionU_Controller'</script>";
                    }else{
                        echo "<script>alert('No se realizó correctamente su registro. Por favor intente de nuevo.');</script>";
                        $this->vista('index');
                    }
            }
        }
    }
?>