<?php
/* Smarty version 3.1.39, created on 2021-07-29 00:00:05
  from 'D:\www\UTN_PHPAvanzado_02_2021\Clase06\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6101d3657104b8_87042192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e40e8ef996ca5cd9085cf523128c46152963675b' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_02_2021\\Clase06\\templates\\index.tpl',
      1 => 1627509603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6101d3657104b8_87042192 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <table border="1">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empleados']->value, 'empleado');
$_smarty_tpl->tpl_vars['empleado']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empleado']->value) {
$_smarty_tpl->tpl_vars['empleado']->do_else = false;
?>    
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value['apellido'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value['cargo'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value['sueldo'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value['email'];?>
</td>
        </tr>
    <?php
}
if ($_smarty_tpl->tpl_vars['empleado']->do_else) {
?>
        <tr>
        <td>---Sin datos-----------</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>    
</body>
</html><?php }
}
