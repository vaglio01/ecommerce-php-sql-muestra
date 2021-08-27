let cuerpo = document.body;
let form_inputName = document.getElementById("inputName");
let bt_login = document.getElementById("bt_login");

let form = document.getElementById("formulario");








let pGetUs = getParameterByName("id");

let usuario = "";
let oldusuario = "";

if (pGetUs > 0) {
  fetch('http://localhost:' + PORT + '/users/nameByid/' + pGetUs)
    .then(response => response.json())
    .then(json => {
      usuario = json[0].usuario
      let name = "";
      name = json[0].nombre + " " + json[0].apellido;
      insertName(name);
    }
    );
} else {

  insertForm();
}



function insertName(name) {
  let armoTabla = "";
  armoTabla = armoTabla + `
        <div class="mb-3">
        <label for="formGroupExampleInput">${name}</label>        
    </div>
    `;
  form_inputName.innerHTML = armoTabla;
}

function insertForm() {
  let armoTabla = "";
  armoTabla = armoTabla + `
        <div class="mb-3">
        <label for="formGroupExampleInput">Nombre de Usuario</label>
        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nombre de usuario">
    </div>
    `;
  form_inputName.innerHTML = armoTabla;
}

function updateLoginDate(id){
  
  fetch('http://localhost:' + PORT + '/users/updateDate/' + id)
  .then(response => response.json())
  .then(json => {
   
  })
}



form.addEventListener("submit", function (e) {

    e.preventDefault();

    let form_Password = document.getElementById("password");
    let password = form_Password.value;

    if (!(pGetUs > 0)) {
      form_usuario = document.getElementById("usuario");
      usuario = form_usuario.value;      
    }

    password = form_Password.value;

    var objectParams = {
      "usuario": usuario,
      "password": password
    }


    let sentencia = fetch("http://localhost:" + PORT + "/users/autentication/",
      {
        method: 'POST',
        body: JSON.stringify(objectParams),
        headers: { 'Content-Type': 'application/json' }
      }
    ) .then(response => response.json())
    .then(json => {
      if (json[0].cont==1){
        
        sessionStorage.clear(); 
        sessionStorage.setItem("id",json[0].id);
        sessionStorage.setItem("usuario",json[0].usuario);
        sessionStorage.setItem("nombre",json[0].nombre);
        sessionStorage.setItem("apellido",json[0].apellido);

        updateLoginDate(json[0].id);
        location.href= "main.html?id="+json[0].id; 
      }else{
        alert("Error al intentar iniciar sesión , Revise usuario o contraseña.");
        }
      
      
    }
    );

    oldusuario=usuario;
  }
)
