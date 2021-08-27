<?php
/* Smarty version 3.1.39, created on 2021-08-06 15:59:51
  from 'C:\xampp\htdocs\PHP_AVANZADO_SMARTY\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610d4057549a10_61937024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f8eea60eba99d8833dbac0783ba81cb256ad29c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_SMARTY\\templates\\menu.tpl',
      1 => 1628108780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610d4057549a10_61937024 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="border-bottom" id="mainMenu">
<div class="menuSep"></div>
<div class="menuPerfil">
    <div id="nameAndLastName"></div>   
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img class="imgIco" src="img/ico/user-04.png">
                
            </a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
               
                    <li><a class="dropdown-item" href="index.php?action=login">Login</a></li>
               
                <li><a class="dropdown-item" href="index.php?action=register">Registrar Usuario</a></li>
                
                    <li><a class="dropdown-item" href="index.php">Modificar Usuario</a></li>                
                    <li><a class="dropdown-item" href="index.php">Borrar Usuario</a></li>
                
                <li><a class="dropdown-item" href="index.php">Salir</a></li>                                
            </ul>   
        </div>
</div> 
</header><?php }
}
