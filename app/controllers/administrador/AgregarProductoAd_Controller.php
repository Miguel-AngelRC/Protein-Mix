<?php
    SESSION_START();
    Class AgregarProductoAd_Controller extends Controller_Ad{
        
        public function  __construct(){
            
            if (isset($_SESSION["nombre"])){
                $this->vista('agregarProductoAd');
                echo "<script>sesionActivaAd('".$_SESSION["nombre"]."'); </script>";
            }else{
                echo "<script>alert('Debes de iniciar sesión para acceder a esta página')</script>";
                echo "<script>window.location.href='".RUTA_URL."/IniciarSesionAd_Controller'</script>";
            }    
        }

        //carga pagina index metodo por default
        public function index(){
            
        }

        //Función registrarProducto que llama a verificarProducto o a insertarProducto
        public function registrarProducto(){
            //se incluye y crea una instancia del modelo AgregarProductoAd_Model
            $registrar = $this->modelo('AgregarProductoAd_Model');
            
            if ($registrar->verificarProducto()) {
                echo "<script>alert('Este producto ya existe. Por favor ingrese otro.');</script>";//ventana emergente
                //$this->vista('agregarProductoAd');
                echo "<script>window.location.href='".RUTA_URL."/AgregarProductoAd_Controller'</script>";
            }
            else{
                $idProducto = $registrar->insertarProducto();
                if (isset($idProducto) && $idProducto!=false) {
                    $categoria = $_POST['category'];

                    $imagen = $this->subirImagen($idProducto, $categoria);
                   ;

                    if($imagen == true && !is_string($imagen)){
                        echo "<script>alert('Se ha registrado el producto.');</script>";//ventana emergente
                        $categoria = $_POST['category'];
                        echo "<script>window.location.href='".RUTA_URL."/Paginas_Controller_Ad/categoria/$categoria'</script>";
                    }else{
                        echo "<script>alert('.$imagen.');</script>";
                        $registrar->eliminaProductoInsertado($idProducto);
                    }
                }
                else{
                    echo "<script>alert('No se agregó correctamente el producto. Por favor intente de nuevo.');</script>";//ventana emergente
                    echo "<script>window.location.href='".RUTA_URL."/AgregarProductoAd_Controller'</script>";
                }
            }
        }
    
        public function subirImagen ($idProducto,$idCategoria){
            
                //Recogemos el archivo enviado por el formulario
                $archivo = $_FILES['archivo']['name'];
                //Si el archivo contiene algo y es diferente de vacio
                if (isset($archivo) && $archivo != "") {
                   //Obtenemos algunos datos necesarios sobre el archivo
                   $tipo = $_FILES['archivo']['type'];
                   $tamano = $_FILES['archivo']['size'];
                   $temp = $_FILES['archivo']['tmp_name'];
                   //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
                  if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                     return "Error. La extensión o el tamaño de los archivos no es correcta. Se permiten archivos .gif, .png, .jpg (recomendada) y de 200 kb como máximo";
                  }
                  else {
                     //Si la imagen es correcta en tamaño y tipo
                     //Se intenta subir al servidor
                     if (move_uploaded_file($temp, RUTA_PUBLIC."\\public\\img\\".$idCategoria."\\".$archivo)) {
                        /*$info = new SplFileInfo(RUTA_PUBLIC."\\public\\img\\".$idCategoria."\\".$archivo);
                        
                        $ext = $info->getExtension();*/
                        //se renombra archivo
                        rename (RUTA_PUBLIC."\\public\\img\\".$idCategoria."\\".$archivo , RUTA_PUBLIC."\\public\\img\\".$idCategoria."\\".$idProducto.".jpg");
                        
                        return true;
                     }else {
                        //Si no se ha podido subir la imagen, mostramos un mensaje de error
                        return "Ocurrió algún error al subir el fichero. No pudo guardarse. Intente de nuevo";
                     }
                   }
                }
             else{
                return "Sin Imagen, Agregue una imagen";
             }
            
        }
    }

?>