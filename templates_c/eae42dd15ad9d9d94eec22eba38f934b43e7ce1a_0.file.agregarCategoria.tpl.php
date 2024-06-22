<?php
/* Smarty version 4.3.4, created on 2023-11-14 00:51:27
  from 'C:\xampp\htdocs\trabajotp1\templates\agregarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6552b67fb86e82_84347524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eae42dd15ad9d9d94eec22eba38f934b43e7ce1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajotp1\\templates\\agregarCategoria.tpl',
      1 => 1697487895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6552b67fb86e82_84347524 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedor-agregar-categoria">
    <form class="formulario-agregarcategoria" method="post" action="agregarcategoria" enctype="multipart/form-data">
        <label><h1>titulo de la categoria a agregar:</h1></label><input type="text" name="categorianuevatitulo" required>
        <input type="submit">
    </form>
<div><?php }
}
