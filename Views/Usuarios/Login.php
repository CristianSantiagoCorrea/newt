<?php
include "../Menu/Header.php";
?>
    
<div id="login">
<div class="container">
<div class="row justify-content-center">
<div class="col">
</div>
<div class="col-lg-5 m-5">

<h3>Login Technical English</h3>
<form id="formlogin" class="form" action="UsuariosController.php" method="POST" >
  <div class="mb-3">
<input type="hidden" name="accion" id="accion" value="login">
    <label for="email" class="form-label"> please enter your Email address @</label>
    <input type="email" name="Email" class="form-control" id="Email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Your mail it´s safe with us</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="Password">
  </div>
 
  <div class=" mb-3 form-floating">
  <select class="form-select" onchange="getSelectValue();"  id="Rol" name="Rol"  aria-label="Floating label select example">
    <option selected>seleccione su rol</option> 
    <option value="Aprendiz" id="Aprendiz">Aprendiz</option>
    <option value="Instructor" id="Instructor">Instructor</option>

  </select>

  <script>
window.onload = getSelectValue;
function getSelectValue(){

let valorSeleccionado = document.getElementById("rol").value;
let divval = document.getElementById("aprend");
let divvalinst = document.getElementById("ins");


if (valorSeleccionado == "Aprendiz" &&  !divval) {
    
    if(divvalinst){ 
    const padre = divvalinst.parentNode;
    padre.removeChild(divvalinst);
    }

    


} 
if (valorSeleccionado == "Instructor" && !divvalinst) {
   if(divval){
    const padre = divval.parentNode;
    padre.removeChild(divval);
   }
  

    
} 
console.log(valorSeleccionado);




}


  </script>




  <label for="floatingSelect">select your rol</label>
</div>

  
  <input type="submit" id="submit" name="submit" class="btn btn-success" value="login"> 
</form>
</div>
</div>










</div>










</div>

<script src="jquery-3.3.1.min.js"></script>
<script src="../Js/Codigo.js"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
include "../Menu/Footer.php";
?>