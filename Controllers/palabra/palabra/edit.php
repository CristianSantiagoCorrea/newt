




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
<link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>

<body>
<?php  if(isset($_GET['error'])): ?>
    <?php echo $_GET['error'] ?>
    <?php endif ?>
    <h1>Update word</h1>
<a href="agregar.php" class="btn btn-danger">Agregar</a>
<div>
<table>
<tbody>



 <?php 
 include "Conexion.php";
 
 if(isset($_POST['update'])){
     $palabra =$_POST['palabra'] ;
     $palabra_def =$_POST['palabra_definicion'] ;
     $palabra_id =$_GET['idpalabra'] ;

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
$sql = "UPDATE `palabra` SET `palabra`='$palabra', `palabra_definicion`='$palabra_def',`palabra_sonido`='$nombre_nuevo_sonido',`palabra_imagen`='$nombre_nueva_imagen' WHERE `idpalabra`='$palabra_id'";
$resultado = mysqli_query($conection,$sql); //$consubir es de config conection y es donde estan las conexiones directas
if($resultado){
    echo "<script>alert('EXITOSAMENTE GUARDADO');</script>";
    }else{
    echo "Error" . $sql ."<br>" . mysqli_error($conection);
    }

}else{

$mensaje_extension = "This type of files are not supported please upload jpg, jpeg or png";
header("Location:glossary.php?error=$mensaje_extension");

}

}
}   
   
}



 
 if(isset($_GET['idpalabra'])){
    $palabra_id =$_GET['idpalabra'];
$sql = "SELECT * FROM `palabra` WHERE `idpalabra`= '$palabra_id' ";
$query = mysqli_query($conection,$sql);
}

 
 
 
 
 
 
 
 
 
 while ($filas = mysqli_fetch_assoc($query)){   ?>

    <div class="container">
    <tr>
    <form action="" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation"
        validate>
    <div class="row">
    <div class="col m-5">
   
    <label>Word</label> <br>
    <input class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required type="text" name="palabra"   value="<?php echo $filas['palabra'] ?>">
    <label>Description</label> <br>
    <div class="row align-self-center">
                    <label for="validationTextarea" class="form-label">Definition</label>
                    <textarea class="form-control is-invalid" id="validationTextarea"
                      name="palabra_definicion" ><?php echo $filas['palabra_definicion'] ?></textarea>
                    <div class="invalid-feedback">
                        Please Edit your definition
                    </div>
   
                    <div class="row">
                    <label for="formFile" class="form-label" >Upload new audio</label>
                    <input class="form-control is-invalid" name="sonido" type="file" id="formFile">
                </div>
                <div class="row">
                    <label for="formFile" class="form-label" >upload your mew the image max 1.5mbs</label>
                    <input class="form-control is-invalid" name="imagen" type="file" id="formFile">
                </div>
    
    <div class="row">
    
    <div class=".align-content-lg-center">
    <td>

    <input class="btn btn-primary m-2" type="submit" name="update" value="update" >
    
    </td>
    </div>

    </div>
    </form>
    </tr>
    
    <!-- SELECT -->
    <td>
    <label>Last Sound</label> <br>  
    <audio controls> 
<source src="../../sound/soundusers/<?=$filas['palabra_sonido']?>" type="audio/mpeg">

</audio>
</td>
<td>
<label>Last Image</label> <br>
    <img class="figure-img img-fluid rounded" id="imageglossary" src="../../img/img_users/<?=$filas['palabra_imagen']?>" alt=""></td>
<td>


   
  
   
    </div>
     <?php  }  // cierre del while ?>
    </tbody>
   
    </table>
       
    </div>
    </div>

    <?php 
if(isset($_POST['update'])){
}
?>


</body>

</html>