<?php

    class Controller_Us {

        //Cargar modelos
        public function modelo ($modelo){
            //cargar modelo
            require_once '../app/models/usuario/'.$modelo.'.php';
            //instanciar y retornar modelo
            return new $modelo();
        }

        //Cargar vista
        public function vista($vista,$datos = []){
            //verificar que la vista exista
            if ( file_exists('../app/views/pages/usuario/'.$vista.'.php')) {
                require_once '../app/views/pages/usuario/'.$vista.'.php';
            }else{
                die ('La vista '.$vista.' no existe');
            }
        }
    }
?>