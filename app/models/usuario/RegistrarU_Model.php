<?php
    Class RegistrarU_Model{

        private $db;
        private $nombre;
        private $apellidos;
        private $ciudad;
        private $calle;
        private $numero;
        private $correo;
        private $contrasena;

        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
            $this->nombre = $_POST['username'];
            $this->apellidos = $_POST['lastname'];
            $this->ciudad = $_POST['city'];
            $this->calle = $_POST['street'];
            $this->numero = $_POST['number'];
            $this->correo = $_POST['email'];
            $this->contrasena = $_POST['password'];
            $this->contrasena = password_hash($this->contrasena, PASSWORD_BCRYPT);
        }

        //verificar si ya existe el usuario a registrar
        public function verificarExistencia(){
            try {
                $this->db->query("SELECT * FROM ".DB_NAME.".USUARIO  WHERE nombre = '".$this->nombre."' and apellidos = '".$this->apellidos."' and correo = '".$this->correo."'");
                return $this->db->rowCount()==1; //retorna true o false
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
        }


        //insertar usuario
        public function insertarUsuario(){
            try {   
                $this->db->query("INSERT INTO ".DB_NAME.".Usuario (nombre,apellidos,ciudad,calle,numero,correo,contrasena) VALUES('".$this->nombre."','".$this->apellidos."','".$this->ciudad."','".$this->calle."','".$this->numero."','".$this->correo."','".$this->contrasena."');");
                $this->db->execute();
                return true;
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
        }

        //limpiarVariables
    }
?>