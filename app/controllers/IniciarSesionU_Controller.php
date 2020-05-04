<?php
    class IniciarSesionU_Controller extends Controller{
        public function  __construct (){
            $this->vista('pages/iniciarSesionU');
        }

        //carga pagina index (registrar usuarios) metodo por default
        public function index(){
            //$this->vista('pages/iniciarSesionU');
        }

        //Verifica si el  usuario esta registrado
        public function validarRegistro (){
            
            //se incluye y crea una instancia del modelo RegistrarUsuario
            $iniciarSesion = $this->modelo('IniciarSesionU_Model');

            $verificar = $iniciarSesion->validarDatos() ;

            if ($verificar[0]) {
                header('Location: '.RUTA_URL.'/Paginas_Controller');
                // $this->vista('pages/paginaPrincipal');
            }else{
                echo "<script>alert('$verificar[1]');</script>";
                        $this->vista('pages/iniciarSesionU');
            }
        }
    }
?>