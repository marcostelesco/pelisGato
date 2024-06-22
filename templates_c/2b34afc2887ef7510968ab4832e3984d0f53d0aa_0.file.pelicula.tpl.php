<?php
/* Smarty version 4.3.4, created on 2023-10-12 23:45:21
  from 'C:\xampp\htdocs\trabajotp1modificar\templates\pelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652868f1dfb6e0_31582480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b34afc2887ef7510968ab4832e3984d0f53d0aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajotp1modificar\\templates\\pelicula.tpl',
      1 => 1697147121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652868f1dfb6e0_31582480 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="contenedor-flex">
    <div class="contenedor-pelicula">
        <div>
            <img class="imagen-pelicula" src="<?php echo $_smarty_tpl->tpl_vars['peli']->value->url_img;?>
" alt="">
        </div>
        <div class="info-peliculas">
            <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" class="nav-link"><button>Borrar</button></a>  
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
