<?php
    SESSION_START();
    class IniciarSesionU_Controller extends Controller_Us{
        private $sesion;

        //constructor 
        public function  __construct (){
            $this->vista('iniciarSesionU');
        }

        //Verifica si el  usuario esta registrado
        public function validarRegistro (){
            //Se instancia del modelo IniciarSesionU_Model
            $iniciarSesion = $this->modelo('IniciarSesionU_Model');

            $verificar = $iniciarSesion->validarDatos() ;

            if ($verificar[0]) {
                $_SESSION['nombre']= $_POST['username'];
                $_SESSION["productos"]=[];
                echo "<script>window.location.href='".RUTA_URL."/Paginas_Controller/'</script>";
            }else{
                echo "<script>alert('$verificar[1]');</script>";
                        $this->vista('iniciarSesionU');
            }
        }


        public  function getSesion()
        {
            return $this->sesion;
        }
    }
?>