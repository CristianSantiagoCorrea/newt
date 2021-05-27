<?php
include "../Menu/Header.php";
?>
    
<div id="login">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-5 m-5">

<h3>Register Technical English</h3>
<form id="formlogin" class="form" action="UsuariosController.php" method="POST" >


  <div class="mb-3">
<input type="hidden" name="accion" id="accion" value="insertar">

    <label for="email" class="form-label"> please enter your Email address @*</label>
    <input type="email" name="Email" class="form-control" id="Email" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">Your mail it´s safe with us</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password*</label>
    <input type="password" class="form-control" id="Password" name="Password" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">confirm your Password*</label>
    <input type="password" class="form-control" id="Passwordconf" name="Passwordconf" required>
  </div>
  <div class="mb-3">
    <label for="validationCustom03" class="form-label">Name*</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" required>
    <div class="invalid-feedback">
    Please select one field
    </div>
  </div>

  <div class=" mb-3 form-floating">
  <select class="form-select" onchange="getSelectValue();"  id="Rol" name="Rol"  aria-label="Floating label select example" required>
    <option selected>seleccione su rol</option> 
    <option value="Aprendiz" id="Aprendiz" name="Aprendiz">Aprendiz</option>
    <option value="Instructor" id="Instructor" name="Instructor">Instructor</option>

  </select>

  <script>
window.onload = getSelectValue;
function getSelectValue(){

let valorSeleccionado = document.getElementById("Rol").value;
let divval = document.getElementById("Aprend");
let divvalinst = document.getElementById("Ins");


if (valorSeleccionado == "Aprendiz" &&  !divval) {
    
    if(divvalinst){ 
    const padre = divvalinst.parentNode;
    padre.removeChild(divvalinst);
    }
document.querySelector('#Rol').insertAdjacentHTML('afterEnd',`
<div class="col-md-6 mt-3" id="Aprend">
    <label for="validationCustom03" class="form-label">Ficha debe tener 7 caracteres*</label>
    <input type="text" class="form-control" id="Ficha" name="Ficha" required>
    <div class="invalid-feedback">
    Please select one field
    </div>
  </div>

`);
    


} 
if (valorSeleccionado == "Instructor" && !divvalinst) {
   if(divval){
    const padre = divval.parentNode;
    padre.removeChild(divval);
   }
    document.querySelector('#Rol').insertAdjacentHTML('afterEnd',`
    <div class="col-md-6 mt-3" id="Ins">
    <label for="validationCustom03" class="form-label">Titulo*</label>
    <input type="text" class="form-control" id="Titulo" name="Titulo" required>
    <div class="invalid-feedback">
      Please select one field
    </div>
  </div>

`);

    
} 
console.log(valorSeleccionado);




}
  </script>
  <label for="floatingSelect">select your rol</label>
</div>
<div class="d-grid gap-2">
  <input type="submit" id="Submit" name="Submit" class="btn btn-primary" value="register"> 
</div>
</form>
</div>
</div>
</div>
</div>
<script src="../Js/jquery-3.6.0.min.js"></script>
<!-- <script src="../Js/Codigo.js"></script>  -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<?php
include "../Menu/Footer.php";
?>