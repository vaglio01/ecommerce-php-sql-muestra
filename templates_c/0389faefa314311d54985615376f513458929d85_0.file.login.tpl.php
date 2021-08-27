<?php
/* Smarty version 3.1.39, created on 2021-08-05 00:03:05
  from 'D:\www\UTN_PHPAvanzado_02_2021\basecomercio\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610b0e991caef0_70542709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0389faefa314311d54985615376f513458929d85' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_02_2021\\basecomercio\\templates\\login.tpl',
      1 => 1628114545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610b0e991caef0_70542709 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="css/styles.css">   
    <?php echo '<script'; ?>
 src="js/functions.js"><?php echo '</script'; ?>
>

    
    <title>Login</title>
</head>

<body>

    <div class="content">
        <div class="bg-light p-4 rounded">
            <div class="row justify-content-center align-items-center">
                    

                    <form id="formulario" method="POST">
                            <div class="mb-3">
                            <label for="formGroupExampleInput2">Usuario</label>
                            <input type="text" 
                                   class="form-control" 
                                   name="usuario" 
                                   id="usuario" 
                                   placeholder="Usuario"
                                     
                                    pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                                     
                                   >
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" 
                                   class="form-control" 
                                   name="password" 
                                   id="password"
                                    placeholder="Password"
                                     
                                    pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                                     
                                    >
                        </div>
                    
                        <div class="col-auto">
                            <button type="Submit" id="bt_login" class="btn btn-outline-primary">Acceder</button>
                    
                            <button type="button" class="btn btn-outline-success">
                            <a href="index.html">Regresar</a></button>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>

</body>

</html><?php }
}
