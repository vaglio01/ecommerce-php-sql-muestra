let form = document.getElementById("formulario");
let f_usuario = document.getElementById("usuario");
let f_nombre = document.getElementById("nombre");
let f_apellido = document.getElementById("apellido");
let f_dni = document.getElementById("dni");
let f_condicion = document.getElementById("condicion");
let f_password = document.getElementById("password");
let f_rPassword = document.getElementById("rPassword");



form.addEventListener("submit", function (e) {

    e.preventDefault();
    // alert("entre1");

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

        let sentencia = fetch("http://localhost:" + PORT + "/users/register",
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
                alert("Registración exitosa");
                location.href = "index.html";
                console.log('Success:', response)
            });
    } 

})