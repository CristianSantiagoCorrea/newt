<?php 
require '../Config/Connection.php';



class Palabra{
protected $Idpalabra;
protected $Palabra;
protected $PalabraDefinicion;
protected $PalabraSonido;
protected $PalabraImagen;
protected $PalabraTraduccion;

protected function BorrarPalabra(){

    if(isset($_GET['idpalabra'])){

        $palabra_id = $_GET['idpalabra'];
        
        $sql = "DELETE FROM `palabra` WHERE `idpalabra`='$palabra_id' ";
        
        $resultado = mysqli_query($conection,$sql);

    }

}

protected function GuardarPalabra(){

   

if($sonido_error === 0 || $imagen_error === 0) { 
    if($sonido_peso>230000 || $imagen_peso>230000){  
$mensaje = "File size is to big";
header("Location: glossary.php?error=$mensaje"); //valida el mensaje de la operacion si es mas grande a 1.1 mbs arroja error
}else{
   $file_ext = pathinfo($sonido_nombre,PATHINFO_EXTENSION);//se usa path info extension para verificar que se suba una sonido con alguna extension y no un texto o pdf
   echo ($file_ext); 
   $file_ext_minuscula = strtolower($file_ext);
   $ext_permitidas_sonido = array("mp3");

   $file_extimg = pathinfo($imagen_nombre,PATHINFO_EXTENSION);//se usa path info extension para verificar que se suba una imagen con alguna extension y no un texto o pdf
   echo ($file_extimg); 
   $file_extimg_minuscula = strtolower($file_extimg);
   $ext_permitidas_imagenes = array("jpg","jpeg","png");


if(in_array($file_ext_minuscula,$ext_permitidas_sonido) && in_array($file_extimg_minuscula,$ext_permitidas_imagenes)){ //tiene dos parametros en uno recibe el parametro que se va a buscar en el array si se encuentra prosigue sino saca error
   
$nombre_nuevo_sonido = uniqid("SOUND-",true).'.'.$file_ext_minuscula;
$folder_guardar_sonido = '../../sound/soundusers/'.$nombre_nuevo_sonido;
move_uploaded_file($sonido_data,$folder_guardar_sonido);//se guarda la sonido en una carpeta


$nombre_nueva_imagen = uniqid("IMG-",true).'.'.$file_extimg_minuscula;
$folder_guardar_imagen = '../../img/img_users/'.$nombre_nueva_imagen;
move_uploaded_file($imagen_data,$folder_guardar_imagen);

//QUERY
$sql = "INSERT INTO palabra(palabra,palabra_definicion,palabra_sonido,palabra_imagen) VALUES('$palabra','$palabra_definicion','$nombre_nuevo_sonido','$nombre_nueva_imagen')";
$query=mysqli_query($conection,$sql); //$consubir es de config conection y es donde estan las conexiones directas
if($query){
    echo "<script>alert('EXITOSAMENTE GUARDADO');</script>";
    }else{
    echo "Error" . $sql ."<br>" . mysqli_error($conexion);
    }

}else{

$mensaje_extension = "This type of files are not supported please upload jpg, jpeg or png";
header("Location:glossary.php?error=$mensaje_extension");

}

}

}else {
    $mensaje="Error has ocurred";
    header("Location: glossary.php?error=$mensaje");
} 

}

  

}//final de la clase










?>