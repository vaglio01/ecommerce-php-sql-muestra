function borrarUsuario(){
    let opcion = confirm("¿Está seguro que desea borrar el perfil de usuario?.");
    if (opcion){
        let sentencia = fetch('http://localhost:' + PORT + '/users/delete/' + id,
            {method:'DELETE'}
        )
        .then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => {
            console.log('Success:', response);
              
            alert("¡Registro eliminado exitosamente!.");

            location.href= "index.html";    

        });
    }

}