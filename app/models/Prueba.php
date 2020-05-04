<?php
    class Prueba {
        private $db;

        public function __construct () {
            $this->db= new Base;
        }

        public function obtenerUsuarios(){
            $this->db->query("SELECT * FROM USUARIO");
            return $this->db->rowCount();
        }
    }
?>