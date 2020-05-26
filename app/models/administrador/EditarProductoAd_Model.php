<?php
    Class EditarProductoAd_Model{

        private $db;

        public function __construct () {
            $this->db = new Base;//Hacer conexion con el constructor de Base
            $this->idProducto = $_POST['idProducto'];
        }

        public function guardarCambios($idP,$nombreP, $descripcionP,$stockP, $precioP){
            try {
                $consulta=$this->db->query("UPDATE ".DB_NAME.".Producto SET nombreProducto = '".$nombreP."',descripcion = '".$descripcionP."',precio = ". $precioP.",stock = ".$stockP." WHERE idProducto = ".$idP);
                
                return $this->db->execute();
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
    }
?>