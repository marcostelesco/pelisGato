<?php
/* Smarty version 4.3.4, created on 2023-10-16 22:34:19
  from 'C:\xampp\htdocs\Projects\trabajotp1\templates\pelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d9e4bac4650_42817236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a86e85367a0584a07e6c3339dbe0e9d63c53a93b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\trabajotp1\\templates\\pelicula.tpl',
      1 => 1697487631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d9e4bac4650_42817236 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="contenedor-flex">
    <div class="contenedor-pelicula">
        <div>
            <img class="imagen-pelicula" src="<?php echo $_smarty_tpl->tpl_vars['peli']->value->url_img;?>
" alt="">
        </div>
        <div class="info-peliculas">
            <h1 class="home-titulo-pelicula"><a href="pelicula/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['peli']->value->name;?>
 </h1>
            <h2>Categoria: <?php echo $_smarty_tpl->tpl_vars['peli']->value->categorie;?>
</h2>
            <h4 class="descripcion">Descripcion:   <?php echo $_smarty_tpl->tpl_vars['peli']->value->description;?>
</h4>
        </div>  

    </div>

</div>    <?php }
}
