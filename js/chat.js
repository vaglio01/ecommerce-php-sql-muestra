var colorRow = true;

function createChat() {
  insertChat();
  getDBComments();
}


function insertChat() {
  let chat = document.getElementById("mainPanel");
  let cad = `
  <div class="chatContent">
   <div class="chatDivIzq">
     <div class="chatDivUpper bd-content ps-lg-4 border-end" id="comments" >Comments</div>
     <div class="chatDivDown border" id="chatBox" >'
        ${insertForm()}
     </div>
   </div>
   <div class="chatDivDer border-bottom">
     ${insertName()}
   </div>
 </div>`;
  chat.innerHTML = cad;
}

function insertName() {
  return nombre + " " + apellido
}

function insertForm() {
  let cad = `  
    <form id="formMessage" name="formMessage" class="mb-10 row" method="POST" action="javascript:sendMessage()" >    
      <div class="col">      
        <input type="test" class="form-control" id="message" name="message" placeholder="Mensaje">
      </div>
    <div class="col-auto">
      <button type="submit" id="btSubmit" class="btn btn-primary mb-3">Enviar</button>
    </div>
  </form>`;

  return cad;
}




function insertOneComment(userName, text) {
  let cad = ""
  cad = `<div class="oneMessage">
            <div class="oneComment overflow-auto" >
              <span class="cUser">${userName}</span>
              <span class="cSpace"> : </span>
              <span class="cComment">${text}</span>
            </div>
          </div>`;
  return cad;
}

function insertComments(json) {
  let chat = document.getElementById("comments");
  let cad = "";

  json.forEach(data => {
    cad += insertOneComment(data.nombre + " " + data.apellido, data.message);
 
  });

  chat.innerHTML = cad;
}

function getDBComments() {

  fetch('http://localhost:' + PORT + '/messages/limits/')
    .then(response => response.json())
    .then(json => {
      insertComments(json);
    }
    );
    setTimeout('updateChat()',3000);
}

function sendMessage() {
  let f_form = document.getElementById("formMessage");
  let f_message = document.getElementById("message");
  
  let objectParams = {
    "user_id": id,
    "message": f_message.value,
  }
  // alert(id+" - "+f_message.value);
  let sentencia = fetch("http://localhost:" + PORT + "/messages/insert/",
    {
      method: 'POST',
      body: JSON.stringify(objectParams),
      headers: { 'Content-Type': 'application/json' }
    }
  )
    .then(res => res.json())
    .catch(error => console.error('Error:', error))
    .then(response => {
      f_form.reset();    

      getDBComments();
      
    });
}

function updateChat(){
  getDBComments();
  
 }