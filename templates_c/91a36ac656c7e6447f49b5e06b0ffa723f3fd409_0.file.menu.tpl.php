<?php
/* Smarty version 3.1.39, created on 2021-08-11 17:05:33
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL - copia\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6113e73d4a86c8_60875399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a36ac656c7e6447f49b5e06b0ffa723f3fd409' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL - copia\\templates\\menu.tpl',
      1 => 1628640846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6113e73d4a86c8_60875399 (Smarty_Internal_Template $_smarty_tpl) {
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

                <li><a class="dropdown-item" href="index.php?action=modificar">Modificar Usuario</a></li>
                
                    <li><a class="dropdown-item" href="index.php?action=borrar">Borrar Usuario</a></li>
                
                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>                                
            </ul>   
        </div>
</div> 
</header><?php }
}
