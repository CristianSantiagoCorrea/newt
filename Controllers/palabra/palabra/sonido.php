
<?php 
include "Conexion.php";
include "subirarchivos.php";


// include("../../controllers/subirarchivos.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$con = new conexion;
$con -> connect();



?>


    <!-- <form action="/app/controllers/subirarchivos.php"  method="post" enctype="multipart/form-data"> -->

<?php  if(isset($_GET['error'])): ?>
<?php echo $_GET['error'] ?>
<?php endif ?>


<form action="sonido.php"  method="post" enctype="multipart/form-data">
    <input type="file" name="sonido" value="upload sonido/ subir sonido">
     <input type="submit" 
            name="submit" 
            value="SEND">
    </form>






</body>
</html>