<?php
    //Clase para hacer conexión la base de datos y utilizar PDO
    class Base{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $dbName = DB_NAME;

        private $dbh; //data base handler, manejador de base de datos
        private $stmt; //handler, manipular
        private $error; 

        public function __construct(){
            //configurar connexion
            $dns = 'mysql:host='.$this->host.';dbname='.$this->dbName;//origen de la base de datos
            
            $options = array(//opciones adicionales a la base 
                    PDO::ATTR_PERSISTENT => true,//hace que no se cierre la base de datos y se almacena enc cache para ser mas rapida
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            //Crear instancia de PDO (hacer conexion)
            try {
                //conexion 
                $this->dbh = new PDO ($dns,$this->user,$this->password,$options);
                //hacer que acepte caracteres especiales
                $this->dbh->exec('set names utf8');

            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error; 
            }
        }
        
        //Preparar consulta
        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
        }

        //vincular la consulta con bind
        public function bind($parametro,$valor,$tipo = null){
            if(is_null($tipo)){
                switch (true) {
                    case is_int($valor):
                        $tipo = PDO::PARAM_INT;
                    break;
                    case is_bool($valor):
                        $tipo = PDO::PARAM_BOOL;
                    break;
                    case is_null($valor):
                        $tipo = PDO::PARAM_NULL;
                    break;
                    default:
                        $tipo = PDO::PARAM_STR;
                    break;
                }
            }
            $this->stmt->bindValue ($parametro,$valor,$tipo);
        }

        //Ejecuta la consulta
        public function execute(){
            return $this->stmt->execute();
        }

        //Obtener los registros
        public function registros(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        //Obtener los registros
        public function columna(){
            $this->execute();
            return $this->stmt->fetchColumn(1);
        }

        //Obtener un solo registro
        public function registro(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

        //Obtener el numero de filas
        public function rowCount(){
            $this->execute();
            return $this->stmt->rowCount();
        }
    }

?>