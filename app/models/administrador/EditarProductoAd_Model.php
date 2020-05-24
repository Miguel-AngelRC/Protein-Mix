<?php
    Class EditarProductoAd_Model{

        private $db;
        private $idProducto;

        public function __construct () {
            $this->db = new Base;//Hacer conexion con el constructor de Base
            $this->idProducto = $_POST['idProducto'];
        }

        public function consultaProducto(){
            try {
                $consulta=$this->db->query("SELECT * FROM ".DB_NAME.".Producto  WHERE IdProducto = '".$this->idProducto."'");
                return $this->db->registro();
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
    }
?>