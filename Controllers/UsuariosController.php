<?php session_start();


include_once '../Models/Usuario.php';
class UsuariosController extends Usuario{


public function Mostrarlogin()
{
include '../Views/Usuarios/Login.php';
}  

public function MostrarRegistro()
{
include '../Views/Usuarios/Registro.php';
}  


//PREPARAR DATOS REGISTER
public function PrepararDatosap($Email,$Password,$Nombre,$Ficha,$Rol){

$this->Email    =$Email;
$this->Nombre   =$Nombre;
$this->Ficha    =$Ficha;
$this->Rol      =$Rol ;    
$this->Password =$Password;
$this-> GuardarAprendiz();
}

public function PrepararDatosin($Email,$Password,$Nombre,$Titulo,$Rol){
echo $Email;
    $this->Email    =$Email;
    $this->Nombre   =$Nombre;
    $this->Titulo   =$Titulo;
    $this->Rol      =$Rol ;    
    $this->Password =$Password;
    $this-> GuardarInstructor();
    
}


//PREPARAR DATOS LOGIN
public function PrepararDatoslogAp($Email,$Password){

   
    
        $this->Email    =$Email;
        $this->Password =$Password;
        $aprendiz = $this-> ConsultarAprendiz();// se debe almacenar en una variable para verificar el objeto donde esta la contraseña
   
       
       
        if ($aprendiz =='N') {
        $_SESSION['error'] = 'No se encontro usuario en la base de datos';
        $this->Redirectlog();
    }else{

if (password_verify($this->Password,$aprendiz->Aprendiz_password)) {

$_SESSION['Email']= $aprendiz->Aprendiz_correo;
$_SESSION['Nombre']= $aprendiz->Aprendiz_nombre;
$_SESSION['Ficha']= $aprendiz->Aprendiz_ficha;

$this-> Redirectdash();

}else{

$_SESSION['error']= 'Contraseña incorrecta';
$this->Redirectlog();

}

         }   
    }


public function PrepararDatoslogIns($Email,$Password){
    echo $Email;
        $this->Email    =$Email;
        $this->Password =$Password;
       $Ins = $this-> ConsultarInstructor();// se debe almacenar en una variable para verificar el objeto donde esta la contraseña
       
    
                if ($Ins =='N' || $Password =='') {
                    $_SESSION['error'] = 'No se encontro usuario en la base de datos';
                    $this->Redirectlog();
                }else{
            
            if (password_verify($this->Password,$Ins->Ins_password)) {
                $_SESSION['Email'] = $aprendiz->Aprendiz_correo;
                $_SESSION['Nombre']= $aprendiz->Aprendiz_nombre;
                $_SESSION['Titulo']= $aprendiz->Aprendiz_titulo;
                $this-> Redirectdash();



            }else{
            
                $_SESSION['error']= 'Contraseña incorrecta';
                $this->Redirectlog();
            
            }
        }
    }




//REDIRECT
   public function Redirectdash(){

header("location:../Views/Dashboard/Sidebar.php");//index

    }

    public function Redirect(){

header("location:../");//index

    }

    public function Redirectlog(){

        header("location:/newt/Controllers/UsuariosController.php?accion=login"); //redirect login
        
            }

//LOGOUT


public function LogOut(){

  
    unset($_SESSION['Email']);
    session_destroy();
    
    header("location: ../");





} 




}


//ACCIONES MOSTRAR VISTAS


if (isset($_GET['accion']) && $_GET['accion'] == 'login') {
    
    $instance = new UsuariosController();
    $instance->Mostrarlogin();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'register') {
 
    $instance = new UsuariosController();
    $instance->MostrarRegistro();
}


if (isset($_GET['accion']) && $_GET['accion'] == 'logout') {
 
    $instance = new UsuariosController();
    $instance->LogOut();
}


//ACCION DE GUARDAR USUARIOS

if (isset($_POST['accion']) && $_POST['accion'] == 'insertar') {
    
    if ($_POST['Rol'] == 'Aprendiz' &&isset($_POST['Email'])&&isset($_POST['Password'])&&isset($_POST['Nombre'])&&isset($_POST['Ficha'])&&isset($_POST['Rol'])) {
    $instanceap = new UsuariosController();
    $instanceap->PrepararDatosap($_POST['Email'],$_POST['Password'],$_POST['Nombre'],$_POST['Ficha'],$_POST['Rol']);
    $instanceap->Redirectlog();

}else{ $instanceap = new UsuariosController();
    $instanceap->Redirectlog();
}

    if ($_POST['Rol'] == 'Instructor'  &&isset($_POST['Email'])&&isset($_POST['Password'])&&isset($_POST['Nombre'])&&isset($_POST['Titulo'])&&isset($_POST['Rol'])) {
        
        $instancein = new UsuariosController();
        $instancein->PrepararDatosin($_POST['Email'],$_POST['Password'],$_POST['Nombre'],$_POST['Titulo'],$_POST['Rol']);;
        $instanceap->Redirectlog();
        }else{ $instancein = new UsuariosController();
            $instancein->Redirectlog();

        }



    }

if (isset($_POST['accion']) && $_POST['accion'] == 'login') {
    
    if ($_POST['Rol'] == 'Aprendiz' && isset($_POST['Email']) && isset($_POST['Password'])) {
    $instanceap = new UsuariosController();
    $instanceap->PrepararDatoslogAp($_POST['Email'],$_POST['Password']);
  

}else{ $instanceap = new UsuariosController();
    $instanceap->Redirectlog();

}
    

    if ($_POST['Rol'] == 'Instructor') {
        
        $instancein = new UsuariosController();
        $instancein->PrepararDatoslogIns($_POST['Email'],$_POST['Password']);;
        
        }


    }

        
    