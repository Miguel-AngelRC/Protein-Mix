<?php
    class RegistrarAd_Controller extends Controller_Ad{
        
        public function  __construct (){
            $this->vista('index');
        }

        //carga pagina index metodo por default
        public function index(){

        }

        //Registra al Administrador
        public function registrarAdministrador(){
            //se incluye y crea una instancia del modelo RegistrarAdministrador
            $registrar = $this->modelo('RegistrarAd_Model');

            if ($registrar->verificarAdministrador()) {
                echo "<script>alert('El administrador ya existe.');</script>";//ventana emergente
                $this->vista('index');
            }
            else{
                if ($registrar->insertarAdministrador()) {
                    echo "<script>alert('¡Se ha registrado exitosamente!.');</script>";//ventana emergente
                    //header('Location: '.RUTA_URL.'/IniciarSesionAd_Controller');//Redirecciona a la pag de iniciar sesión
                    echo "<script>window.location.href='".RUTA_URL."/IniciarSesionAd_Controller'</script>";
                }
                else{
                    echo "<script>alert('No se realizó correctamente su registro. Por favor intente de nuevo.');</script>";
                    $this->vista('index');
                }
            }
        }
    }
?>