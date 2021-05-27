<?php 
require '../Config/Connection.php';

class Aprendiz extends Usuario {

protected $Ficha;





}







//  public function __construct(){
//   require '../Config/Conexion.php';
//   $instanciaconecion = new Conexion();
//  }


// public function registroaprendiz(){

//   $conexion = $objeto -> Conectar();
//   $nombre =(isset($_POST['nombre'])) ? $_POST['nombre']:'';
//   $ficha =(isset($_POST['ficha'])) ? $_POST['ficha']:'';
//   $password =(isset($_POST['password'])) ? $_POST['password']:'';
//   $email =(isset($_POST['email'])) ? $_POST['email']:'';



//   $passwordenc = password_hash($password, PASSWORD_ARGON2I );
  
  
//   $validationq =   "SELECT * from aprendiz WHERE aprendiz_correo ='$email'";
//   $queryresulto = $conexion->prepare($validationq);
//   $queryresulto -> execute();
//   if ($queryresulto->rowCount()>=1) {
//       $datos = null;
  
//   } else {
//       $query = "INSERT INTO aprendiz(Aprendiz_rol,aprendiz_correo,aprendiz_ficha,aprendiz_nombre,aprendiz_estado,aprendiz_password,Aprendiz_date) values('$email','$ficha','$nombre',1,'$passwordenc',NOW()) ";
//       $queryresult = $conexion->prepare($query);
//       $queryresult -> execute();
//       console.log($queryresult);
//       if ($queryresult->rowCount()>=1) {
          
//       $datos = $queryresult->fetchAll(PDO::FETCH_ASSOC);
      
//       } else {
         
//        $datos = null;
//       }
     
//   }
  
  
  
//   print json_encode($datos);
//   $conexion=null;
  





// }








//     //conversaciones//

// public  function insertaudio(string $audioaprendiz, string $sesionapp){  //esta inserta el audio de practica
//   $objeto = new Conexion();
//   $conexion = $objeto -> Conectar();

 
//   $audioaprendiz =(isset($_POST['audioaprendiz'])) ? $_POST['audioaprendiz']:'';
//   $sesionapp =(isset($_POST['sesionapp'])) ? $_POST['sesionapp']:'';
   
  
//       $query = "";
//       $queryresult = $conexion->prepare($query);
//       $queryresult -> execute();
//       console.log($queryresult);
//       if ($queryresult->rowCount()>=1) {
          
//       $datos = $queryresult->fetchAll(PDO::FETCH_ASSOC);
      
//       } else {
         
//        $datos = null;
//       }
//   print json_encode($datos);
//   $conexion=null;
   
// }















// private  function setGuardarDefinicion(){
// if (isset($_POST['submit']) && isset($_FILES['imagen'])){



    
// echo "succesfully created";
// }else{


// header("Location:index.php");// en esta ruta se define


// }



// }
 
// public function setGuardarImagen(){
// if (isset($_POST['aceptar']) && isset($_POST['imagen'])) {
// echo "<pre>";
// print_r($_POST['imagen']);
// echo "</pre>";

// $nombre_imagen = $_FILES['imagen'];


// }else {
//   # code...
// }
// }

// private function setGuardarAudio(){

// }


// private function getConsultarPalabra(){

// }

// private function getConsultarDefinicion(){

// }
// private function getConsultarImagen(){

// }


// }








?>