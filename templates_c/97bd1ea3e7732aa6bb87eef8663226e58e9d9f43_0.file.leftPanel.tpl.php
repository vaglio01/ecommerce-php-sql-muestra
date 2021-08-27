<?php
/* Smarty version 3.1.39, created on 2021-08-13 00:04:46
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL\templates\leftPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61159afe354162_05365134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97bd1ea3e7732aa6bb87eef8663226e58e9d9f43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL\\templates\\leftPanel.tpl',
      1 => 1628805884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61159afe354162_05365134 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bbb"> 
    <aside  class="border-end" id="leftMenu">
        <p>Categortia de Productos </p>
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
