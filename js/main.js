let nameAndLastName = document.getElementById("nameAndLastName");

var id = sessionStorage.getItem("id");
var usuario = sessionStorage.getItem("usuario");
var nombre = sessionStorage.getItem("nombre");
var apellido = sessionStorage.getItem("apellido");


if ((id > 0) && (id != null)) {
  insertNameAndLastName(nombre + " " + apellido);
}


function insertNameAndLastName(data) {
  nameAndLastName.innerHTML = data;
}

