<?php
/* Smarty version 3.1.39, created on 2021-08-12 20:56:56
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL_V1\templates\body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61156ef8b87719_41592340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fde3af3833554938a6e05ff7baedc7d99698722' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL_V1\\templates\\body.tpl',
      1 => 1628794614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61156ef8b87719_41592340 (Smarty_Internal_Template $_smarty_tpl) {
?>

        
        
                <div id="mainPanel">    
                    <div class="continer_Art">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articulos']->value, 'articulo');
$_smarty_tpl->tpl_vars['articulo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['articulo']->value) {
$_smarty_tpl->tpl_vars['articulo']->do_else = false;
?> 
                       <div class ="arti"> 
                        <h5><?php echo $_smarty_tpl->tpl_vars['articulo']->value['nombre'];?>
</h5> 
                        <span>Precio: $<?php echo $_smarty_tpl->tpl_vars['articulo']->value['precio'];?>
</span> 
                        <span>Stock: <?php echo $_smarty_tpl->tpl_vars['articulo']->value['stock'];?>
</span>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                    </div>
                </div> 
            </div>  
            </section>    
   <?php }
}
