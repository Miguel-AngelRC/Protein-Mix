<?php
    Class EliminarProductoAd_Model{

        private $db;
        private $nombreProducto;

        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
            $this->nombreProducto = $_POST['nameProducto'];
        }

        //Verifica si existe el producto a eliminar
        public function verificarProducto(){
            try {
                $this->db->query("SELECT * FROM ".DB_NAME.".producto  WHERE nombreProducto = '".$this->nombreProducto."'");
                return $this->db->rowCount()==1;//retorna true o false
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
        }

        //Elimina el producto
        public function eliminarProducto(){
            try {   
                $this->db->query("DELETE FROM ".DB_NAME.".producto WHERE nombreProducto = '".$this->nombreProducto."'");
                $this->db->execute();
                return true;
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
        }
    }
?>