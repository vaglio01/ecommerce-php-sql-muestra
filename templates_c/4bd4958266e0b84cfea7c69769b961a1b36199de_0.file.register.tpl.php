<?php
/* Smarty version 3.1.39, created on 2021-08-05 00:50:22
  from 'D:\www\UTN_PHPAvanzado_02_2021\basecomercio\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610b19ae2224d3_30560707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd4958266e0b84cfea7c69769b961a1b36199de' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_02_2021\\basecomercio\\templates\\register.tpl',
      1 => 1628117416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610b19ae2224d3_30560707 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">        
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">   
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="css/register.css">   
  

  
  <title>Registracion</title>
</head>

<body>

  <section class="content">

    <div class="bg-light p-4 rounded" id="idDivForm">
      <header class="shadow-sm p-3 mb-3 bg-white rounded" id="mainMenu">
        <h2>Registración</h2>
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
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['usuario'];?>

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
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['nombre'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Apellido</span>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
" class="form-control" placeholder="apellido" aria-label="apellido" name="apellido"  id="apellido" aria-describedby="basic-addon1" pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}"  >
          
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['apellido'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Dni</span>
            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
" placeholder="dni" aria-label="dni" name="dni" id="dni"   aria-describedby="basic-addon1" pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}"  >
            
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['dni'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Condición</span>
            <select class="form-control" name="condicion" value="<?php echo $_smarty_tpl->tpl_vars['condicion']->value;?>
" id="condicion" aria-describedby="basic-addon1">
              <option value="Profesor">Profesor</option>
              <option value="Alumno">Alumno</option>
            </select>

          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['condicion'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" id="password" aria-describedby="basic-addon1" pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}"  >
            
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['password'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Reingrese Password</span>
            <input type="password" class="form-control" placeholder="Reingrese Password" aria-label="rPassword" name="rPassword" id="rPassword" aria-describedby="basic-addon1" pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}"  >
            
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['rPassword'];?>

          <div class="col-auto">
            <button type="submit" class="btn btn-outline-success">Registrarme</button>
            <button type="button" class="btn btn-outline-primary"><a href="index.html">Cancelar</a></button>
          </div>

        </form>
      </section>
    </div>
  </section>


</body><?php }
}
