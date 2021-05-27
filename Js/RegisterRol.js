
window.onload = getSelectValue;
function getSelectValue(){

let valorSeleccionado = document.getElementById("rol").value;
let divval = document.getElementById("aprend");
let divvalinst = document.getElementById("ins");


if (valorSeleccionado == "aprendiz" &&  !divval) {
    
    if(divvalinst){ 
    const padre = divvalinst.parentNode;
    padre.removeChild(divvalinst);
    }
document.querySelector('#rol').insertAdjacentHTML('afterEnd',`
<div class="col-md-6 mt-3" id="aprend">
    <label for="validationCustom03" class="form-label">Ficha debe tener 7 caracteres*</label>
    <input type="text" class="form-control" id="ficha" required>
    <div class="invalid-feedback">
    Please select one field
    </div>
  </div>

`);
    


} 
if (valorSeleccionado == "instructor" && !divvalinst) {
   if(divval){
    const padre = divval.parentNode;
    padre.removeChild(divval);
   }
    document.querySelector('#rol').insertAdjacentHTML('afterEnd',`
    <div class="col-md-6 mt-3" id="ins">
    <label for="validationCustom03" class="form-label">Titulo*</label>
    <input type="text" class="form-control" id="titulo" name="titulo" required>
    <div class="invalid-feedback">
      Please select one field
    </div>
  </div>

`);

    
} 
console.log(valorSeleccionado);




}
