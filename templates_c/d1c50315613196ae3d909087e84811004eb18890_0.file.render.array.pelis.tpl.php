<?php
/* Smarty version 4.3.4, created on 2023-10-13 00:05:22
  from 'C:\xampp\htdocs\trabajotp1modificar\templates\render.array.pelis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65286da259a635_85891207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1c50315613196ae3d909087e84811004eb18890' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajotp1modificar\\templates\\render.array.pelis.tpl',
      1 => 1697148138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65286da259a635_85891207 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pelis']->value, 'peli');
$_smarty_tpl->tpl_vars['peli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
$_smarty_tpl->tpl_vars['peli']->do_else = false;
?>
    
    
<div class="contenedor-pelicula">
    <div>
      <img class="imagen-pelicula" src="<?php echo $_smarty_tpl->tpl_vars['peli']->value->url_img;?>
" alt="">
    </div>
    <div class="info-peliculas">
      <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" class="nav-link"><button>Borrar</button></a> 
      <a href="modificarview/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" class="nav-link"><button>Modificar</button></a> 
      <h1 class="home-titulo-pelicula"><a href="pelicula/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['peli']->value->name;?>
</a></h1>
      <h2>Categoria: <?php echo $_smarty_tpl->tpl_vars['peli']->value->categorie;?>
</h2>
      <h4 class="descripcion">Descripcion:   <?php echo $_smarty_tpl->tpl_vars['peli']->value->description;?>
</h4>
    </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

<div>
        <h2 class="">Agregar un pelicula a la lista!</h2>
        <form method="post" action="createPeli" enctype="multipart/form-data">
            <label>Nombre de la Pelicula:</label><input type="text" name="name" required>
            <label>Categoria de la pelicula:</label><select name="categorie">
                <option value="action">Accion</option>
                <option value="adventure">Aventura</option>
                <option value="drama">Drama</option>
            </select>
            <label>Año de lanzamiento:</label><input type="text" name="release_date" required>
            <label>Descripcion:</label><input type="text" name="description" required>
            <label>Adjuntar imagen:</label><input type="file" name="img">
            <input type="submit" value="Agregar">
        </form>
</div>

            <?php }
}
