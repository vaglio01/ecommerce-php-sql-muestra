<?php
/* Smarty version 3.1.39, created on 2021-08-11 20:10:51
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL_V1\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611412ab371cf5_38751743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c62829665903b5d11a75874031a57607b1366206' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL_V1\\templates\\menu.tpl',
      1 => 1628705448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611412ab371cf5_38751743 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="border-bottom" id="mainMenu">
<div class="menuSep"></div>
<div class="menuPerfil">
    <div id="nameAndLastName"></div>   
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img class="imgIco" src="img/ico/user-04.png">
                <div style="color: #e7d5d5">><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</div>
            </a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
               
                    <li><a class="dropdown-item" href="index.php?action=login">Login</a></li>
               
                <li><a class="dropdown-item" href="index.php?action=register">Registrar Usuario</a></li>

                <li><a class="dropdown-item" href="index.php?action=modificar">Modificar Usuario</a></li>
                
                    <li><a class="dropdown-item" href="index.php?action=borrar">Borrar Usuario</a></li>
                
                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>                                
            </ul>   
        </div>
</div> 
</header><?php }
}
