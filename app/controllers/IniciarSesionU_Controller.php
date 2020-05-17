<?php
    class IniciarSesionU_Controller extends Controller{
        
        //constructor 
        public function  __construct (){
            $this->vista('pages/iniciarSesionU');
        }

        //carga pagina index (registrar usuarios) metodo por default
        public function index(){
            //$this->vista('pages/iniciarSesionU');
        }

        //Verifica si el  usuario esta registrado
        public function validarRegistro (){
            
            //Se instancia del modelo IniciarSesionU_Model
            $iniciarSesion = $this->modelo('IniciarSesionU_Model');

            $verificar = $iniciarSesion->validarDatos() ;

            if ($verificar[0]) {
                header('Location: '.RUTA_URL.'/Paginas_Controller');
            }else{
                echo "<script>alert('$verificar[1]');</script>";
                        $this->vista('pages/iniciarSesionU');
            }
        }
    }
?>