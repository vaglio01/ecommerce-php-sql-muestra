<?php
/* Smarty version 3.1.39, created on 2021-08-11 02:31:34
  from 'C:\xampp\htdocs\PHP_AVANZADO_TP_FINAL\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61131a66bea720_44141712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b6e93e754c508c1a8ed98e2b09cfe1d32ebd8a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_AVANZADO_TP_FINAL\\templates\\main.tpl',
      1 => 1628108780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61131a66bea720_44141712 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/chat.css">
    <?php echo '<script'; ?>
 src="js/functions.js"><?php echo '</script'; ?>
>


    <title>Sistema Escolar</title>
</head>

<body>


    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <!-- <link rel="stylesheet" href="css/estilos.css"> -->

    <title>Sistema Escolar</title>
    </head>

    <body>

        <section class="content">

            <section class="middlePanel">
                <aside  class="border-end" id="leftMenu">
                    <ul>
                        <li>Actividades</li>
                        <li>Cursos</li>
                        <li>Tareas</li>
                        <li>Recursos</li>                        
                        <li><a href="javascript:createChat()">Chat</a></li>
                    </ul>
                </aside>
                <div id="mainPanel">
                    
                </div>
            </section>
        </section>
        <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/deleteProfile.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/chat.js"><?php echo '</script'; ?>
>
        

    </body><?php }
}
