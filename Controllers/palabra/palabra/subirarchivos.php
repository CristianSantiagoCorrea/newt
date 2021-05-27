<?php 
require 'Conexion.php';


if (isset($_POST['submit']) /*&& isset($_POST['palabra'])&& isset($_POST['palabra_definicion'])&& isset($_FILES['sonido'])*/) {
    
    //SUBIRPALABRA
    $palabra = $_POST['palabra'];
    //SUBIRTEXTO
    $palabra_definicion = $_POST['palabra_definicion'];
    //SUBIR SONIDO 
    $sonido_nombre = $_FILES['sonido']['name'];
    $sonido_tipo = $_FILES['sonido']['type'];
    $sonido_data = $_FILES['sonido']['tmp_name'];//data
    $sonido_peso = $_FILES['sonido']['size'];
    $sonido_error = $_FILES['sonido']['error'];

    //SUBIR IMAGEN
    $imagen_nombre = $_FILES['imagen']['name'];
    $imagen_tipo = $_FILES['imagen']['type'];// para validar que la imagen no sea de un tipo diferente
    $imagen_data = $_FILES['imagen']['tmp_name'];// es el que se guarda en la base de datos
    $imagen_peso = $_FILES['imagen']['size'];// para validar el tamaño del audio que no sea muy pesado
    $imagen_error = $_FILES['imagen']['error'];
    
    // $query= mysqli_query($conection,$sql);
    

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



 
















// if (isset($_POST['submit'])){
//     # code...


//SUBIR IMAGEN

// if($imagen_error === 0) { 
//     if($imagen_peso>130000){  
// $mensaje = "File size is to big";
// header("Location: glossary.php?error=$mensaje"); //valida el mensaje de la operacion si es mas grande a 1.1 mbs arroja error
// }else{
//    $file_extimg = pathinfo($imagen_nombre,PATHINFO_EXTENSION);//se usa path info extension para verificar que se suba una imagen con alguna extension y no un texto o pdf
//    echo ($file_extimg); 
//    $file_extimg_minuscula = strtolower($file_extimg);
//    $ext_permitidas_imagenes = array("jpg","jpeg","png");
// if(in_array($file_extimg_minuscula,$ext_permitidas_imagenes)){ //tiene dos parametros en uno recibe el parametro que se va a buscar en el array si se encuentra prosigue sino saca error
//  $nombre_nueva_imagen = uniqid("IMG-",true).'.'.$file_extimg_minuscula;
// $folder_guardar_imagen = '../../img/img_users/'.$nombre_nueva_imagen;
// move_uploaded_file($imagen_data,$folder_guardar_imagen);//se guarda la imagen en una carpeta

// $sql = "INSERT INTO palabra(palabra,palabra_definicion) VALUES()";
// $sql = "INSERT INTO palabra(palabra_imagen) VALUES('$palabra','$palabra_definicion','$nombre_nuevo_sonido','$nombre_nueva_imagen')";
// mysqli_query($conection,$sql); //$consubir es de config conection y es donde estan las conexiones directas
// }else{
// $mensaje_extension = "This type of files are not supported please upload jpg, jpeg or png";
// header("Location:glossary.php?error=$mensaje_extension");
// }
// }
// }else {
//     $mensaje="Error has ocurred";
//     header("Location: glossary.php?error=$mensaje");
// } 

// } else {
//     # code...
// }

    
  









// 
// if (isset($_POST['submit']) && isset($_FILES['sonido'])) {
 
    

//     echo "<pre>";
//     print_r($_FILES['sonido']);
    
//     echo "</pre>";
//     echo "<script> alert('subido!!!!') </script>";
   
// $sonido_nombre = $_FILES['sonido']['name'];
// $sonido_tipo = $_FILES['sonido']['type'];
// $sonido_data = file_get_contents($_FILES['sonido']['tmp_name']);//data
// $sonido_peso = $_FILES['sonido']['size'];
// $sonido_error = $_FILES['sonido']['error'];

// if($sonido_error === 0) { 
//     if($sonido_peso>210000){  
// $mensaje = "File size is to big";
// header("Location: glossary.php?error=$mensaje"); //valida el mensaje de la operacion si es mas grande a 1.1 mbs arroja error
// }else{

//    $file_ext = pathinfo($sonido_nombre,PATHINFO_EXTENSION);//se usa path info extension para verificar que se suba una imagen con alguna extension y no un texto o pdf
//    echo ($file_ext); 

//    $file_ext_minuscula = strtolower($file_ext);


// $ext_permitidas_sonido = array("mp3","ogg");

// if(in_array($file_ext_minuscula,$ext_permitidas_sonido)){ //tiene dos parametros en uno recibe el parametro que se va a buscar en el array si se encuentra prosigue sino saca error
//    // $consubir = new conexion;
//    // $consubir->connect();

// //$nombre_nuevo_sonido = uniqid("sound-",true).'.'.$file_ext_minuscula;
// // $folder_guardar_sonido = '../../sound/sound_users'.$nombre_nuevo_sonido;
// //move_uploaded_file($sonido_tmpname,$folder_guardar_sonido);//se guarda la sonido en una carpeta
// //QUERY

// //$guardadodelquery = $parametroquery->prepare("insert into palabra values(',)");



// $sql = "INSERT INTO palabra(palabra_sonido) VALUES('$sonido_data')";
// mysqli_query($conection,$sql); //$consubir es de config conection y es donde estan las conexiones directas

// }else{

// $mensaje_extension = "This type of files are not supported please upload 'mp3','ogg'";
// header("Location:glossary.php?error=$mensaje_extension");

// }

// }

// }else {
//     $mensaje="Error has ocurred";
//     header("Location: glossary.php?error=$mensaje");
// } 


// }else {
   

//     echo "<script> alert('is not set!!!!') </script>";
//     }







// //SUBIR IMAGEN
// include "../../config/Conexion.php";

//     if (isset($_POST['submit']) && isset($_FILES['imagen'])) {
 
    

//     echo "<pre>";
//     print_r($_FILES['imagen']);
    
//     echo "</pre>";
//     echo "<script> alert('subido!!!!') </script>";
   
// $imagen_nombre = $_FILES['imagen']['name'];
// $imagen_tipo = $_FILES['imagen']['type'];// para validar que la imagen no sea de un tipo diferente
// $imagen_data = file_get_contents($_FILES['imagen']['tmp_name']);// es el que se guarda en la base de datos
// $imagen_peso = $_FILES['imagen']['size'];// para validar el tamaño del audio que no sea muy pesado
// $imagen_error = $_FILES['imagen']['error'];

// if($imagen_error === 0) { 
//     if($imagen_peso>130000){  
// $mensaje = "File size is to big";
// header("Location: glossary.php?error=$mensaje"); //valida el mensaje de la operacion si es mas grande a 1.1 mbs arroja error
// }else{

//    $file_ext = pathinfo($imagen_nombre,PATHINFO_EXTENSION);//se usa path info extension para verificar que se suba una imagen con alguna extension y no un texto o pdf
//    echo ($file_ext); 

//    $file_ext_minuscula = strtolower($file_ext);// se pone en inusculas strlowercase


// $ext_permitidas_imagenes = array("jpg","jpeg","png");

// if(in_array($file_ext_minuscula,$ext_permitidas_imagenes)){ //tiene dos parametros en uno recibe el parametro que se va a buscar en el array si se encuentra prosigue sino saca error
//    // $consubir = new conexion;
//    // $consubir->connect();

// // $nombre_nueva_imagen = uniqid("IMG-",true).'.'.$file_ext_minuscula;
// // $folder_guardar_imagen = '../../img/img_users/'.$nombre_nueva_imagen;
// // move_uploaded_file($imagen_tmpname,$folder_guardar_imagen);//se guarda la imagen en una carpeta
// //QUERY
// $sql = "INSERT INTO palabra(palabra_imagen) VALUES('$imagen_data')";
// mysqli_query($conection,$sql); //$consubir es de config conection y es donde estan las conexiones directas

// }else{

// $mensaje_extension = "This type of files are not supported please upload jpg, jpeg or png";
// header("Location:glossary.php?error=$mensaje_extension");

// }

// }

// }else {
//     $mensaje="Error has ocurred";
//     header("Location: glossary.php?error=$mensaje");
// } 


// }else {
   

//     echo "<script> alert('is not set!!!!') </script>";
//     }
    
  




?>