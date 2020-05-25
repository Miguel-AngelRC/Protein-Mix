
<?php
    Class IniciarSesionU_Model{

        private $db;
        private $nombre;
        private $contrasena;

        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
        }

        public function buscarUsuario(){
            try {
                $this->db->query("SELECT contrasena FROM ".DB_NAME.".Usuario WHERE nombre = '$this->nombre'");
                $contrasenHash = $this->db->Registro();
                return $contrasenHash;
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        //verificar si  el usuario ya esta registrado y validar contraseña
        public function validarDatos(){
            $this->nombre = $_POST['username'];
            $this->contrasena = $_POST['password'];

            $arrayContrasena = $this->buscarUsuario();//Obtiene contraseña
            
            if (empty($arrayContrasena)) {
                return [false,"No estás registrado"];
             }else{
                $contrasenHash = (string)$arrayContrasena->contrasena;

                if (password_verify($this->contrasena,$contrasenHash)) {
                    return [true];                
                }else{
                    return [false,"Contraseña invalida, por favor intente de nuevo"];
                }
            }
        }
    }
?>
    