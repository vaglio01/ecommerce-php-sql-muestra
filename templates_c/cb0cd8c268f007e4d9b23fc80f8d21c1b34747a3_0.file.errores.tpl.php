<?php
/* Smarty version 3.1.39, created on 2021-08-17 17:39:51
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL\templates\errores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611bd847bbb569_92857390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb0cd8c268f007e4d9b23fc80f8d21c1b34747a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL\\templates\\errores.tpl',
      1 => 1628700876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611bd847bbb569_92857390 (Smarty_Internal_Template $_smarty_tpl) {
?>
                <div id="mainPanel">  
                </div>   
                    <?php if ($_smarty_tpl->tpl_vars['err']->value == 1) {?>
                            <div class="msjError" style="background-color: #3f72af;text-align: center;color: #e7d5d5;">
                                <?php echo $_smarty_tpl->tpl_vars['errorlogueo']->value;?>

                            </div> 
                    <?php }?>  
            </section>   <?php }
}
