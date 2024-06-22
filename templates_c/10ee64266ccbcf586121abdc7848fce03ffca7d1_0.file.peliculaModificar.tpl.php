<?php
/* Smarty version 4.3.4, created on 2023-10-13 00:25:59
  from 'C:\xampp\htdocs\trabajotp1modificar\templates\peliculaModificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65287277cb6363_15895440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ee64266ccbcf586121abdc7848fce03ffca7d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajotp1modificar\\templates\\peliculaModificar.tpl',
      1 => 1697148438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65287277cb6363_15895440 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedor-flex">
    <div class="contenedor-pelicula">
        <div>
            <img class="imagen-pelicula" src="<?php echo $_smarty_tpl->tpl_vars['peli']->value->url_img;?>
" alt="">
        </div>
        <div class="info-peliculas">
            <form method="post" action="modificar/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" enctype="multipart/form-data">
                <label>Nombre de la Pelicula:</label><input type="text" name="name" required>
                <label>Categoria de la pelicula:</label><select name="categorie">
                    <option value="action">Accion</option>
                    <option value="adventure">Aventura</option>
                    <option value="drama">Drama</option>
                </select>
                <label>Año de lanzamiento:</label><input type="text" name="release_date" required>
                <label>Descripcion:</label><input type="text" name="description" required>
                <input type="submit">
                </form>
        </div>  

    </div>

</div>    <?php }
}
