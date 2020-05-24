<?php
    Class VerVentasDiariasAd_Model{

        private $db;
        
        public function __construct () {
            $this->db = new Base;//Hacer conexion con el constructor de Base
        }

        public function verVentasDiarias(){
            try {
                $consulta=$this->db->query("SELECT * FROM ".DB_NAME.".ventadiaria");//selecciona todos los datos de la tabla ventadiaria
                return $this->db->Registros();
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
    }
?>