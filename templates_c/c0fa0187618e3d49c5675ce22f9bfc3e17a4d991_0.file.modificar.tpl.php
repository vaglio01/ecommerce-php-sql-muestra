<?php
/* Smarty version 3.1.39, created on 2021-08-17 20:43:54
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL\templates\modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c036ad96b73_11751282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0fa0187618e3d49c5675ce22f9bfc3e17a4d991' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL\\templates\\modificar.tpl',
      1 => 1628707278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c036ad96b73_11751282 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>


 <div class="bg-light p-4 rounded" id="idDivForm">
      <header class="shadow-sm p-3 mb-3 bg-white rounded mainMenu" >
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
                     value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
"
                      
                     pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                      >
                
          </div>
          
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Nombre</span>
            <input type="text" 
            class="form-control" 
            placeholder="nombre" 
            aria-label="nombre" 
            name="nombre" id="nombre" 
            value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"
            aria-describedby="basic-addon1"
                pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}"  >
                    
          </div>
          <?php echo $_smarty_tpl->tpl_vars['mensageErrorAct']->value['apellido'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Apellido</span>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
" class="form-control" placeholder="apellido" aria-label="apellido" name="apellido"  id="apellido" aria-describedby="basic-addon1" pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}"  >
          
          </div>
          <?php echo $_smarty_tpl->tpl_vars['mensageErrorAct']->value['dni'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Dni</span>
            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
" placeholder="dni" aria-label="dni" name="dni" id="dni"   aria-describedby="basic-addon1" pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}"  >
            
          </div>
          <?php echo $_smarty_tpl->tpl_vars['mensageErrorAct']->value['condicion'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Condición</span>
            <select class="form-control" name="condicion" value="<?php echo $_smarty_tpl->tpl_vars['condicion']->value;?>
" id="condicion" aria-describedby="basic-addon1">
              <option value="Administrador">Administrador</option>
              <option value="Usuario">Usuario</option>
            </select>

          </div>
          
          <?php echo $_smarty_tpl->tpl_vars['mensageErrorAct']->value['password'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" id="password" aria-describedby="basic-addon1" pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}"  >
            
          </div>
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Reingrese Password</span>
            <input type="password" class="form-control" placeholder="Reingrese Password" aria-label="rPassword" name="rPassword" id="rPassword" aria-describedby="basic-addon1" pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}"  >
            
          </div>
          <?php echo $_smarty_tpl->tpl_vars['mensageErrorAct']->value['rPassword'];?>

          <div class="col-auto">
            <button type="submit" class="btn btn-outline-success">Actualizar</button>
            <button type="button" class="btn btn-outline-primary"><a href="index.php">Cancelar</a></button>
          </div>

        </form>
      </section>
</div>
<?php }
}
