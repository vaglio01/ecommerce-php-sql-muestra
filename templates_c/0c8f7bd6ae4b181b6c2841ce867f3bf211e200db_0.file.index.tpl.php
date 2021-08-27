<?php
/* Smarty version 3.1.39, created on 2021-07-29 00:11:02
  from 'D:\www\UTN_PHPAvanzado_02_2021\Clase06 02\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6101d5f62ce034_95459723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c8f7bd6ae4b181b6c2841ce867f3bf211e200db' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_02_2021\\Clase06 02\\templates\\index.tpl',
      1 => 1627510260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6101d5f62ce034_95459723 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <table border="1">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empleados']->value, 'empleado');
$_smarty_tpl->tpl_vars['empleado']->iteration = 0;
$_smarty_tpl->tpl_vars['empleado']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empleado']->value) {
$_smarty_tpl->tpl_vars['empleado']->do_else = false;
$_smarty_tpl->tpl_vars['empleado']->iteration++;
$__foreach_empleado_0_saved = $_smarty_tpl->tpl_vars['empleado'];
?>    
        <?php if (!(1 & $_smarty_tpl->tpl_vars['empleado']->iteration / 3)) {?>
            <tr class="par">
        <?php } else { ?>
            <tr class="impar">
        <?php }?>
        
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
$_smarty_tpl->tpl_vars['empleado'] = $__foreach_empleado_0_saved;
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
