$('#formpalabra').submit(function(e){

e.preventDefault();
var email= $.trim($("#email").val());
var password= $.trim($("#password").val());


var formData = new FormData(document.getElementById("formuploadajax"));
formData.append("dato", "valor");


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
 





if (email.length == "" || password == "") {

Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href>Why do I have this issue?</a>',
        type:'warning',
        title:'Debe ingresar un usuario y/o password',
});
return false;

}else{

$.ajax({
url:"login.php",
type:"POST",
datatype:"json",
data:{email:email,password:password},
success:function(data){

if (data == 'null') {
Swal.fire({
    type:'error',
    title:'password or user incorrect',
});
}else{
    
Swal.fire({
    type:'success',
    title:'Welcome to teen',
    confirmButtonColor:'#FF5733',
    confirmButtonText:'logedin'
 
}).then((result)=>{
if (result.value) {
    window.location.href ="../../index.php";
}



})

}
}
});
}
  
});


// $('#formlogin').submit(function(e){
//     e.preventDefault();
//     var email = $.trim($("#email").val());    
//     var password =$.trim($("#password").val());    
     
//     if(email.length == "" || password == ""){
//        Swal.fire({
//         icon: 'warning',
//                 title: 'Oops...',
//                 text: 'Something went wrong!',
//                 footer: '<a href>Why do I have this issue?</a>',
//            type:'warning',
//            title:'Debe ingresar un usuario y/o password',
//        });
//        return false; 
//      }else{
//          $.ajax({
//             url:"login.php",
//             type:"POST",
//             datatype: "json",
//             data: {email:email, password:password}, 
//             success:function(data){               
//                 if(data == "null"){
//                     Swal.fire({
//                         type:'error',
//                         title:'Usuario y/o password incorrecta',
//                     });
//                 }else{
//                     Swal.fire({
//                         type:'success',
//                         title:'¡Conexión exitosa!',
//                         confirmButtonColor:'#3085d6',
//                         confirmButtonText:'Ingresar'
//                     }).then((result) => {
//                         if(result.value){
//                             window.location.href = "../../index.php";
//                         }
//                     })
                    
//                 }
//             }    
//          });
//      }     
//  });