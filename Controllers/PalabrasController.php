<?php 


include_once '../Models/Palabra.php';
class PalabrasController extends Palabra{


    public function MostrarPalabra()
    {
    include '../Views/Usuarios/Login.php';
    }  
    
   
    
    
    //PREPARAR DATOS REGISTER
    public function PrepararDatospal($Palabra,$PalabraDefinicion,$PalabraSonido,$PalabraImagen,$PalabraTraduccion){
    
    $this->Palabra                =$Palabra;
    $this->PalabraDefinicion      =$PalabraDefinicion;
    $this->PalabraSonido          =$PalabraSonido;
    $this->PalabraImagen          =$PalabraImagen;
    $this->PalabraTraduccion      =$PalabraTraduccion ;    
    $this-> GuardarPalabra();
    }
}






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
    $this -> PrepararDatospal();


}



?>