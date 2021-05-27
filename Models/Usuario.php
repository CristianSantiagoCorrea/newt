<?php 
require '../Config/Connection.php';

class Usuario {
protected $Id;
protected $Email;
protected $Nombre;
protected $Titulo;
protected $Ficha;
protected $Rol;
protected $Password;


protected function GuardarAprendiz(){

try {


include_once "../Config/Connection.php";

$insdb = new Connection();

 

    $query = "INSERT INTO aprendiz (aprendiz_correo,aprendiz_ficha,aprendiz_nombre,aprendiz_estado,aprendiz_password) VALUES (?,?,?,?,?)";
    $newpass = password_hash($this->Password,PASSWORD_ARGON2ID);
    $estado = 1;
  
    $insertar = $insdb->db->prepare($query);
    $insertar->bindParam(1,$this->Email);
    $insertar->bindParam(2,$this->Ficha);
    $insertar->bindParam(3,$this->Nombre);
    $insertar->bindParam(4,$estado);
    $insertar->bindParam(5,$newpass);
  
    $insertar->execute();

} catch (exception $e) {
    throw $e;
}
    


}

protected function GuardarInstructor(){

    try {
    
    
    include_once "../Config/Connection.php";
    
    $insdb = new Connection();
    
     
    
        $query = "INSERT INTO instructor (ins_nombre,ins_titulo,ins_correo,ins_password,ins_estado) VALUES (?,?,?,?,?)";
        $newpass = password_hash($this->Password,PASSWORD_ARGON2ID);
        $estado = 1;
      
        $insertar = $insdb->db->prepare($query);
        $insertar->bindParam(1,$this->Nombre);
        $insertar->bindParam(2,$this->Titulo);
        $insertar->bindParam(3,$this->Email);
        $insertar->bindParam(4,$newpass);
        $insertar->bindParam(5,$estado);
      
        $insertar->execute();
    
    } catch (exception $e) {
        throw $e;
    }
        
    
    
    }
    
    
    protected function ConsultarAprendiz(){
        
        try{
        
        include_once "../Config/Connection.php";
    
        $insdb = new Connection();
        
        $query = "SELECT * FROM APRENDIZ WHERE Aprendiz_correo ='$this->Email'";
        $consulta = $insdb->db->prepare($query);
        $consulta->execute();

        $objap = $consulta->fetchAll(PDO::FETCH_OBJ);
        foreach($objap as $aprendiz){}
         
        if (empty($aprendiz)) {
        $aprendiz = "N";
        }
        return $aprendiz;
        
    
    
    
    
    } catch (exception $e) {
            throw $e;
        }
            
        }


  protected function ConsultarInstructor(){

    try{
        
        include_once "../Config/Connection.php";
    
        $insdb = new Connection();
        
        $query = "SELECT * FROM INSTRUCTOR WHERE INS_correo ='$this->Email'";
        $consulta = $insdb->db->prepare($query);
        $consulta->execute();
        $objap = $consulta->fetchAll(PDO::FETCH_OBJ);
        foreach($objap as $instructor){}
        
               
        if (empty($instructor)) {
        $aprendiz = "N";
        }
        return $instructor;
              
        
       
    
    
    } catch (exception $e) {
            throw $e;
        }
            
      



  }



}


?>