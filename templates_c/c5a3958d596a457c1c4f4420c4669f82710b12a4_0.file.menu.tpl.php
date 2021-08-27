<?php
/* Smarty version 3.1.39, created on 2021-08-17 20:43:47
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c0363bcda00_59775440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a3958d596a457c1c4f4420c4669f82710b12a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL\\templates\\menu.tpl',
      1 => 1629225798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c0363bcda00_59775440 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="border-bottom" id="mainMenu">
<div class="menuSep"></div>
<div class="menuPerfil">
    <div id="nameAndLastName"></div>   
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img class="imgIco" src="img/ico/user-04.png">
                <div style="color: #e7d5d5"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</div>
            </a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
               
                    <li><a class="dropdown-item" href="index.php?action=login">Login</a></li>
               
                <li><a class="dropdown-item" href="index.php?action=register">Registrar Usuario</a></li>

                <li><a class="dropdown-item" href="index.php?action=modificar">Modificar Usuario</a></li>
                
                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>                                
            </ul>   
        </div>
</div> 
</header><?php }
}
