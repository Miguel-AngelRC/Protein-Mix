<?php
    Class AgregarProductoAd_Model{

        private $db;
        private $nombreProducto;
        private $categoria;

        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
            $this->nombreProducto = $_POST['nameProducto'];
            $this->categoria = $_POST['category'];
        }

        
        public function verificarProducto(){
            try {
                $this->db->query("SELECT * FROM ".DB_NAME.".producto  WHERE nombreProducto = '".$this->nombreProducto."' AND categoria = '".$this->categoria."');
                return $this->db->rowCount()==1;//retorna true o false
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
        }

        
        public function eliminarProducto(){
            try {   
                $this->db->query();
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