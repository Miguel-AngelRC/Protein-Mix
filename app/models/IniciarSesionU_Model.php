
<?php
    Class IniciarSesionU_Model{

        private $db;
        private $nombre;
        private $contrasena;

        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
            $this->nombre = $_POST['username'];
            $this->contrasena = $_POST['password'];
        }

        public function buscarUsuario(){
            try {
                $this->db->query("SELECT contrasena FROM protein_mix.usuario WHERE nombre = '$this->nombre'");
                $contrasenHash = $this->db->Registro();
                return $contrasenHash;
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        //verificar si ya  el usuario ya esta registrado y validar contraseña
        public function validarDatos(){
            $contrasenHash = $this->buscarUsuario();
                if (password_verify(contrasena, $contrasenHash)) {
                    return true;                
                }else{
                    return true; 
                }
        }


    }
?>
    

<!-- //Consulta enviada a la base de datos
    $result = mysqli_query($conexion, "SELECT contrasena FROM $nombretabla WHERE nombre = '$_POST[username]'");
    
    //La variable $row retiene el resultado de la consulta realizada en $result
    $row = mysqli_fetch_assoc($result);

    //La variable $hash contiene el hash de la contraseña en la base de datos
    $hash = $row['contrasena'];

    /*La función password_verify () verifica si la contraseña ingresada por el usuario coincide con el hash de contraseña en la base de datos.*/
     -->