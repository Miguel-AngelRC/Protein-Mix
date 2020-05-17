<?php
    Class Tarjetas_Model{
        
        private $db;
    
        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
        }

        /***************************************/
        /*** Funciones para tabla categoria ***/
        /*************************************/
        //Devuelve todos los id de las  categorias 
        public function idCategorias (){
            $this->db->query("SELECT idCategoria FROM protein_mix.categoria");
            return $this->db->Registros(); 
        }

        public function obtenerDatosCategoria($idCategoria){
            $datosTarjeta = [
                            "titulo",
                            "descripcion"]; 
                try {   
    
                        $this->db->query("SELECT nombreCategoria FROM protein_mix.categoria WHERE idCategoria = '$idCategoria'");
                        $datosTarjeta ["titulo"] = (string)$this->db->Registro()->nombreCategoria;
                    
                        $this->db->query("SELECT descripcion FROM protein_mix.categoria WHERE idCategoria = '$idCategoria'");
                        $datosTarjeta ["descripcion"] = (string)$this->db->Registro()->descripcion;
                          
                        return $datosTarjeta;
                } 
                catch (Exception $e) {
                    $this->error = $e->getMessage();
                    echo $this->error;
                    return $datosTarjeta;
                }catch (PDOException $e) {
                    $this->error = $e->getMessage();
                    echo $this->error;
                    return $datosTarjeta;
                }
        }



         /***************************************/
        /*** Funciones para tabla Productos ***/
        /*************************************/
        //Obtiene el nombre de una categoria en especifico
        public function nombreCategoria ($idCategoria){
            $this->db->query("SELECT nombreCategoria FROM protein_mix.categoria WHERE idCategoria = '$idCategoria'");
            return(string)$this->db->Registro()->nombreCategoria; 
        }

        //Devuelve aquellos idproductos que pertenecen a la categoria
        public function idProductos ($idCategoria){
            $this->db->query("SELECT idProducto FROM protein_mix.producto WHERE idCategoria = '$idCategoria'");
            return $this->db->Registros(); 
        }

        public function obtenerDatosProductos($idProducto){
            $datosTarjeta = [
                            "titulo",
                            "descripcion",
                            "precio"]; 
                try {
                    $this->db->query("SELECT nombreProducto FROM protein_mix.producto WHERE idProducto = '$idProducto'");
                    $datosTarjeta ["titulo"] = (string) $this->db->Registro()->nombreProducto;
                
                    $this->db->query("SELECT descripcion FROM protein_mix.producto WHERE idProducto = '$idProducto'");
                    $datosTarjeta ["descripcion"] = (string)$this->db->Registro()->descripcion;

                    $this->db->query("SELECT precio FROM protein_mix.producto WHERE idProducto = '$idProducto'");
                    $datosTarjeta ["precio"] = (string)$this->db->Registro()->precio;
                    
                    return $datosTarjeta;
                } 
                catch (Exception $e) {
                    $this->error = $e->getMessage();
                    echo $this->error;
                    return $datosTarjeta;
                }catch (PDOException $e) {
                    $this->error = $e->getMessage();
                    echo $this->error;
                    return $datosTarjeta;
                }
        }

        
    }
?>