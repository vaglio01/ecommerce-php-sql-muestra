<?php
/* Smarty version 3.1.39, created on 2021-08-12 20:24:15
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL_V1\templates\leftPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6115674fca2791_03021876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f8685e577d71931485824a8a255459207a99d3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL_V1\\templates\\leftPanel.tpl',
      1 => 1628792602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6115674fca2791_03021876 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bbb">
    <aside  class="border-end" id="leftMenu">
        <ul>               
            <li><a href="index.php?">Mostrar Todo</a></li> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?> 
                <li><a href="index.php?action=productos&id=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</a></li> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </aside><?php }
}
