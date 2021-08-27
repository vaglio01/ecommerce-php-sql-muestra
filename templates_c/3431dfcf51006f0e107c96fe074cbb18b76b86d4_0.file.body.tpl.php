<?php
/* Smarty version 3.1.39, created on 2021-08-12 22:11:35
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL\templates\body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611580771d1312_54013582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3431dfcf51006f0e107c96fe074cbb18b76b86d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL\\templates\\body.tpl',
      1 => 1628794614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611580771d1312_54013582 (Smarty_Internal_Template $_smarty_tpl) {
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
