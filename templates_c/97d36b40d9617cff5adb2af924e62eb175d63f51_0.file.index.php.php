<?php
/* Smarty version 3.1.39, created on 2021-08-11 19:13:31
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL_V1\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6114053b73a0f7_71865738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97d36b40d9617cff5adb2af924e62eb175d63f51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL_V1\\index.php',
      1 => 1628640233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6114053b73a0f7_71865738 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
session_start();
include("inc/include.inc.php");
include("Smarty/libs/Smarty.class.php");
$smarty =new Smarty();

$db=new Mysql_inc();
$showMain=false;
$allOk=false;

if(isset($_GET['action'])){
    if($_GET['action']=="login"){
        include("login.php");
    }else if($_GET['action']=="register"){
        include("register.php");
    }else if($_GET['action']=="modificar"){
        include("modificar.php");
    }else if($_GET['action']=="salir"){
        include("salir.php");
    }
           
}

if(!isset($_GET['action']) || $showMain){    
    include("main.php");

}<?php }
}
