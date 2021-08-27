let cuerpo = document.body;
let tabla = document.querySelector("tbody");





fetch('http://localhost:'+PORT+'/users/listByDate/'+SIZE_USER_MAIN_LIST)
  .then(response => response.json())
  .then(json => {
    // console.log(json)
    insertTable(json);

    }  
  )

function insertTable(datos){

    let armoTabla="";   

    datos.forEach(element => {
        let urlTarget=`login.html?id=${element.id}`;
        armoTabla = armoTabla + `
        
        <tr>
          
          <th scope="row"><a href="${urlTarget}"><img src="img/ico/user.png"></a></th>
          <td><a href="${urlTarget}">${element.nombre}</a></td>
          <td><a href="${urlTarget}">${element.apellido}</a></td>
          <td><a href="${urlTarget}">${element.condicion}</a></td>
          
        </tr>`
        

    });

    armoTabla = armoTabla + `
    <tr>
      <td colspan="4" class="tableOption"><div class="d-grid gap-1 col-6 mx-auto"><button class="btn btn-outline-primary"><a class="lista" href="login.html">Otro usuario</a></button></div></td>
    </tr>
    <tr>
      <td colspan="4" class="tableOption"><div class="d-grid gap-1 col-6 mx-auto"><button class="btn btn-outline-primary"><a class="lista" href="register.html">Registrarse</a></button></div></td>
    </tr>`

    // console.log(tabla);
    tabla.innerHTML= tabla.innerHTML+armoTabla;

}

// let trTable=tabla.;


// btnConsultar.addEventListener("click", function(){

//   fetch('http://localhost:3000/personas/' + id.value)
//   .then(response => response.json())
//   .then(datos => 
//       {        
//       nom.value = datos[0].nombre;
//       ape.value = datos[0].apellido;
//       }
//   )
// })


    

         
