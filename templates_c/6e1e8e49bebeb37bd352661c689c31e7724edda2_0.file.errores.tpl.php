<?php
/* Smarty version 3.1.39, created on 2021-08-11 18:54:39
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL_V1\templates\errores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611400cf0e67d6_81266032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e1e8e49bebeb37bd352661c689c31e7724edda2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL_V1\\templates\\errores.tpl',
      1 => 1628700876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611400cf0e67d6_81266032 (Smarty_Internal_Template $_smarty_tpl) {
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
