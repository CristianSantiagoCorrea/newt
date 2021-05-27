
$('#formlogin').submit(function(e){

e.preventDefault();
var Email= $.trim($("#Email").val());
var Password= $.trim($("#Password").val());
var Passwordconf= $.trim($("#Passwordconf").val());
var Nombre = $.trim($("#Nombre").val());
var Titulo = $.trim($("#Titulo").val());
var Rol = $.trim($("#Rol").val());
var Ficha = $.trim($("#Ficha").val());
var Accion = $.trim($("#Accion").val());
//////PRUEBA DEL SELECT
// if(Rol=='aprendiz') {
//     console.log(Rol);
//     Swal.fire({
//         icon: 'warning',
//         title: 'Oops...',
//         text: 'Algo anda mal alguno de los campos esta vacio esta vacio!',
//         footer: '<a href="register.php">Why do I have this issue?</a>',
//         type:'warning',
//         title:'Debe ingresar un usuario y/o Password',
// });
// return false;

    
// } else{

     
//     Swal.fire({
//         icon: 'warning',
//         title: 'cagada',
//         text: 'Algo anda mal alguno de los campos esta vacio esta vacio!',
//         footer: '<a href="register.php">Why do I have this issue?</a>',
//         type:'warning',
//         title:'Debe ingresar un usuario y/o Password',
// });
// }


// var Ficha = $.trim($("#Ficha").val());
// var Titulo = $.trim($("#Titulo").val());
if ((Password === Passwordconf) && (Password.length > 7)) {
    
if (Email.length == "" || Password == ""||Nombre=="" ) {

    Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Algo anda mal alguno de los campos esta vacio esta vacio!',
            footer: '<a href="register.php">Why do I have this issue?</a>',
            type:'warning',
            title:'Debe ingresar un usuario y/o Password',
    });
    return false;
    
    }else{
    
if (Ficha.length == 7 ) {
    if (Rol == "Aprendiz" ) {
        $.ajax({
            url:"../Controllers/UsuariosController.php",
            type:"POST",
            datatype:"json",
            data:{Email:Email,Password:Password,Nombre:Nombre,Ficha:Ficha,Rol:Rol,Accion:Accion},
            success:function(data){
            
            if (data == 'null') {
            Swal.fire({
                type:'error',
                title:'no se ha podido registrar Email ya existe o ha ocurrido un problema',
            });
            }else{
                
            Swal.fire({
                type:'success',
                title:'Successful registration',
                confirmButtonColor:'#FF5733',
                confirmButtonText:'register complete'
             
            })
            
            }
            }
            });
    
    } 
    
} else {
    Swal.fire({
        type:'error',
        title:'no se ha podido a Ficha debe tener minimo 7 numeros',
    });
}

if (Rol == "Instructor" && !Titulo ==""){



            $.ajax({
                url:"../Controllers/UsuariosController.php",
                type:"POST",
                datatype:"json",
                data:{Email:Email,Password:Password,Nombre:Nombre,Titulo:Titulo},
                
                
                success:function(data){
                if (data == 'null') {
                Swal.fire({
                    type:'error',
                    title:'no se ha podido registrar Email ya existe o ha ocurrido un problema',
                });
                }else{
                    
                Swal.fire({
                    type:'success',
                    title:'Successful registration',
                    confirmButtonColor:'#FF5733',
                    confirmButtonText:'register complete'
                 
                })
                
                }
                }
                });  
        }








////////////////////////////////
   
    }


    // aqui va la validacion de contraseña mayo a 8 caracter
} else {
    Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: 'Contraseña debe tener min 8 caracteres y deben ser iguales',
        footer: '<a href="register.php">Why do I have this issue?</a>',
        type:'warning',
        title:'ingrese una contraseña valida',
});
return false;
}

  
});


// $('#formlogin').submit(function(e){
//     e.preventDefault();
//     var Email = $.trim($("#Email").val());    
//     var Password =$.trim($("#Password").val());    
     
//     if(Email.length == "" || password == ""){
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
//             data: {Email:email, password:password}, 
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