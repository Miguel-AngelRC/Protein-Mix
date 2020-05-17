<?php
    Class RegistrarAd_Model{

        private $db;
        private $nombre;
        private $contrasena;

        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
            $this->nombre = $_POST['username'];
            $this->contrasena = $_POST['password'];
            $this->contrasena = password_hash($this->contrasena, PASSWORD_BCRYPT);
        }

        //Verifica si ya existe el Administrador a registrar
        public function verificarAdministrador(){
            try {
                $this->db->query("SELECT * FROM ".DB_NAME.".ADMINISTRADOR  WHERE nombre = '".$this->nombre."'");
                return $this->db->rowCount()==1; //retorna true o false
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
        }

        //Insertar Administrador
        public function insertarAdministrador(){
            try {   
                $this->db->query("INSERT INTO protein_mix.administrador (nombre,contrasena) VALUES('".$this->nombre."','".$this->contrasena."');");
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