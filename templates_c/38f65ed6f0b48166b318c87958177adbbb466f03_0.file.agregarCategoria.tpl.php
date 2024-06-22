<?php
/* Smarty version 4.3.4, created on 2023-10-16 22:25:39
  from 'C:\xampp\htdocs\Projects\trabajotp1\templates\agregarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d9c438411b1_84280968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38f65ed6f0b48166b318c87958177adbbb466f03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\trabajotp1\\templates\\agregarCategoria.tpl',
      1 => 1697487895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d9c438411b1_84280968 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedor-agregar-categoria">
    <form class="formulario-agregarcategoria" method="post" action="agregarcategoria" enctype="multipart/form-data">
        <label><h1>titulo de la categoria a agregar:</h1></label><input type="text" name="categorianuevatitulo" required>
        <input type="submit">
    </form>
<div><?php }
}
