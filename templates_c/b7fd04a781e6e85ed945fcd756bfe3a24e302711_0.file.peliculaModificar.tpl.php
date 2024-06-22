<?php
/* Smarty version 4.3.4, created on 2023-11-13 21:43:37
  from 'C:\xampp\htdocs\Projects\trabajotp1\templates\peliculaModificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65528a799df239_88089460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7fd04a781e6e85ed945fcd756bfe3a24e302711' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\trabajotp1\\templates\\peliculaModificar.tpl',
      1 => 1699908215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65528a799df239_88089460 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedor-flex">
    <div class="contenedor-pelicula">
        <div>
            <img class="imagen-pelicula" src="<?php echo $_smarty_tpl->tpl_vars['peli']->value->url_img;?>
" alt="">
        </div>
        <div class="info-peliculas">
            <form method="post" action="modificar/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" enctype="multipart/form-data">
                <label>Nombre de la Pelicula:</label><input value="<?php echo $_smarty_tpl->tpl_vars['peli']->value->name;?>
" type="text" name="name" required>
                <label>Categoria de la pelicula:</label><select name="categorie">
                    <option value="action">Accion</option>
                    <option value="adventure">Aventura</option>
                    <option value="drama">Drama</option>
                </select>
                <label>Año de lanzamiento:</label><input value="<?php echo $_smarty_tpl->tpl_vars['peli']->value->release_date;?>
" type="text" name="release_date" required>
                <label>Descripcion:</label><input value="<?php echo $_smarty_tpl->tpl_vars['peli']->value->description;?>
" type="text" name="description" required>
                <input type="submit">
                </form>
        </div>  

    </div>

</div>    <?php }
}
