<?php 


// inicio de sesiones, base de datos configuracion ftp
class Connection{

  public $db;

public function __construct(){

try {
 $this-> db = new PDO('mysql:host=localhost;dbname=teen','root','');
  
} catch (PDOexception $e) {
  echo "Error:" . $e->getMessage();
}
}
public function CloseConnection(){  //no permiten los servidores tener conexiones abiertas
$this->db = null;
}

}

























// $host = 'localhost';
// $user = 'root';
// $password ='';
// $db = 'teen';
// $conection = new mysqli($host,$user,$password,$db) or die(mysqli_error($mysqli));


// if(isset($conection)){



// }

// class Conexion{
// public function Conectar(){
// define('servidor','localhost');
// define('nombre_bd','teen');
// define('usuario','root');
// define('password','');
// $opciones =array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

// try {
//  $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd,usuario,password,$opciones);
// return $conexion;


// } catch (Exception $e) {
//   die("Error to conect with db".$e->getMessage());
// }
// }
// }













/*


class Conexion{ // el nombre de la clase conexion para acceder desde cualquier parte de la aplicacion
private $host;
private $user;
private $password;
private $db;
private $charset;

public function connect(){

$this -> host = 'localhost';
$this -> user = 'root';
$this -> password ='';
$this -> db = 'teen';
$this -> charset ='utf8mb4';

try {// prueba la conexion a la base de datos
  
  $conecthis = 
  "mysql:host=".$this->host.";
           db=".$this->db.";
      charset=".$this->charset;
  $conpdo = new PDO($conecthis,$this -> user,$this -> password);
  $conpdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  return $conpdo;
} catch (PDOException $e) {
  echo "Connection failed".$e->getMessage();
}
}
}

// public function __construct(){

// $conectDB = "mysql:host=".,$this->host.";dbnames=".$this->db.";charset=utf8" ;

// try {
//   $this->conect = new PDO($conectDB,$this->user,$this->password);
//   $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//   echo "conexion exitosa";
// } catch (Exception $e) {
   
// $this->conect = 'error de conexión';
// echo"Error".$e->getMessage();

// }




// new mysqli($host,$user,$password,$db) or die(mysqli_error($mysqli))
// if(isset($conect)){ 

// echo "hola";

// }


*/
?>