
<?php include 'Conexion.php';?>
<?php 


if(isset($_GET['idpalabra'])){

$palabra_id = $_GET['idpalabra'];

$sql = "DELETE FROM `palabra` WHERE `idpalabra`='$palabra_id' ";

$resultado = mysqli_query($conection,$sql); //llama conexion base de datos


?>

<h1>BORRADO EXITOSO DEl ELEMENTO ID <?php ECHO $palabra_id ?> </h1>
<div class="container">
<div class="row mt-5">
<a href="glossary.php" class="btn btn-success">Regresar</a>
</div>
</div>
<?php  }?>