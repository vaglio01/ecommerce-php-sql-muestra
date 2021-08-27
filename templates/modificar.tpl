<!DOCTYPE html>


 <div class="bg-light p-4 rounded" id="idDivForm">
      <header class="shadow-sm p-3 mb-3 bg-white rounded mainMenu" {* id="mainMenu" *}>
        <div #sub_tit>Actualizar Datos</div>
      </header>
      <section class="mainContent">
        <form id="formulario" name="formulario" class="row g-3" method="POST"> 
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Ususario</span>
            <input type="text" class="form-control" 
                   placeholder="usuario"
                    aria-label="usuario" 
                    name="usuario"
                     id="usuario" 
                     aria-describedby="basic-addon1"
                     value="{$usuario}"
                     {literal} 
                     pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                     {/literal} >
                
          </div>
          
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Nombre</span>
            <input type="text" 
            class="form-control" 
            placeholder="nombre" 
            aria-label="nombre" 
            name="nombre" id="nombre" 
            value="{$nombre}"
            aria-describedby="basic-addon1"
                {literal}pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" {/literal} >
                    
          </div>
          {$mensageErrorAct.apellido}
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Apellido</span>
            <input type="text" value="{$apellido}" class="form-control" placeholder="apellido" aria-label="apellido" name="apellido"  id="apellido" aria-describedby="basic-addon1" {literal}pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" {/literal} >
          
          </div>
          {$mensageErrorAct.dni}
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Dni</span>
            <input type="text" class="form-control" value="{$dni}" placeholder="dni" aria-label="dni" name="dni" id="dni"   aria-describedby="basic-addon1" {literal}pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" {/literal} >
            
          </div>
          {$mensageErrorAct.condicion}
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Condición</span>
            <select class="form-control" name="condicion" value="{$condicion}" id="condicion" aria-describedby="basic-addon1">
              <option value="Administrador">Administrador</option>
              <option value="Usuario">Usuario</option>
            </select>

          </div>
          
          {$mensageErrorAct.password}
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" id="password" aria-describedby="basic-addon1" {literal}pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" {/literal} >
            
          </div>
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Reingrese Password</span>
            <input type="password" class="form-control" placeholder="Reingrese Password" aria-label="rPassword" name="rPassword" id="rPassword" aria-describedby="basic-addon1" {literal}pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" {/literal} >
            
          </div>
          {$mensageErrorAct.rPassword}
          <div class="col-auto">
            <button type="submit" class="btn btn-outline-success">Actualizar</button>
            <button type="button" class="btn btn-outline-primary"><a href="index.php">Cancelar</a></button>
          </div>

        </form>
      </section>
</div>
