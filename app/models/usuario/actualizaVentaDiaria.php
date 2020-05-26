<?php
    Class actualizaVentaDiaria{
        
        private $db;
    
        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
        }

        /*************************************************************/
        /*** Funciones para actualizar la tabla de ventas diarias ***/
        /***********************************************************/
         
        public function inserta_Actualiza_VentaDiaria(){
            //inserta en tabla ventadiaria
            $this->db->query("SELECT insertaVentaDiaria();");
            $resultado = $this->db->execute();
            //actualiza total de venta diaria
            $this->db->query("SELECT totalCompraDiaria();");
            $resultado = $this->db->execute();
        }
       
    }
?>