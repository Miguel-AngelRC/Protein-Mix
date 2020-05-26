<?php
    Class EliminarProductoAd_Model{

        private $db;

        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
        }

        public function eliminarProducto($idProducto){    
            try {   
                $this->db->query("DELETE FROM ".DB_NAME.".Producto WHERE idProducto = ".$idProducto);
                return $this->db->execute();
                
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
        }
    }
?>