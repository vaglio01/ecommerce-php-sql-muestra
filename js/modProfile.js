let form = document.getElementById("formulario");
let f_usuario = document.getElementById("usuario");
let f_nombre = document.getElementById("nombre");
let f_apellido = document.getElementById("apellido");
let f_dni = document.getElementById("dni");
let f_condicion = document.getElementById("condicion");
let f_password = document.getElementById("password");
let f_rPassword = document.getElementById("rPassword");

var id=sessionStorage.getItem("id");

fetch('http://localhost:'+PORT+'/users/'+id)
  .then(response => response.json())
  .then(json => {
    
    f_usuario.value = json[0].usuario;
    f_nombre.value = json[0].nombre;
    f_apellido.value = json[0].apellido;
    f_dni.value = json[0].dni;
    f_condicion.value = json[0].condicion;
    f_password.value = json[0].password;
    f_rPassword.value = json[0].password;
    }  
  )

form.addEventListener("submit", function (e) {

    e.preventDefault();
    
    if (f_usuario.value == "") {
        alert("Complete el usuario");        
    } else if (f_nombre.value == "") {
        alert("Complete su nombre");        
    } else if (f_apellido.value == "") {
        alert("Complete su apellido");        
    } else if (f_dni.value == "") {
        alert("Complete su DNI");            
    } else if (f_password.value == "") {      
        alert("Complete el password");        
    } else if (f_rPassword.value == "") {      
        alert("Reingrese su password");        
    } else if (f_password.value != f_rPassword.value) {      
        alert("No coinciden los campos de password");        
    }else{
        let objectParams = {
            "usuario": f_usuario.value,
            "nombre": f_nombre.value,
            "apellido": f_apellido.value,
            "dni": f_dni.value,
            "condicion": f_condicion.value,
            "password": f_password.value,            
        }

        let sentencia = fetch("http://localhost:" + PORT + "/users/update/"+id,
            {
                method: 'POST',
                body: JSON.stringify(objectParams),
                headers: { 'Content-Type': 'application/json' }
            }
        )
            .then(res => res.json())
            .catch(error => console.error('Error:', error))
            .then(response => {
                
                // form.reset();    
                
                sessionStorage.setItem("usuario",f_usuario.value);
                sessionStorage.setItem("nombre",f_nombre.value);
                sessionStorage.setItem("apellido",f_apellido.value);
                
                alert("Perfil actualizado");
                location.href = "main.html";
                console.log('Success:', response)
            });
    } 

})