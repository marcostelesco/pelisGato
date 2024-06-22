<?php
/* Smarty version 4.3.4, created on 2023-11-14 01:34:23
  from 'C:\xampp\htdocs\trabajotp1\templates\peliculaModificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6552c08f189ad3_31520063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf76da3fdf37c402a9fafd00f0dde06ba3609a89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajotp1\\templates\\peliculaModificar.tpl',
      1 => 1699922027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6552c08f189ad3_31520063 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categorie;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->categorie;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                </select>
                <label>Año de lanzamiento:</label><input value="<?php echo $_smarty_tpl->tpl_vars['peli']->value->release_date;?>
" type="text" name="release_date" required>
                <div class "espacio"><label>Descripcion:</label><input id="input-categorie" value="<?php echo $_smarty_tpl->tpl_vars['peli']->value->description;?>
" type="text" name="description" required></div>
                <input type="submit">
                </form>
        </div>  

    </div>

</div>    <?php }
}
