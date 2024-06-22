<?php
/* Smarty version 4.3.4, created on 2023-11-14 00:52:42
  from 'C:\xampp\htdocs\trabajotp1\templates\render.array.pelis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6552b6cac4c2a6_21202833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '141270abe502594041f6f7cb34892a050f07987b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajotp1\\templates\\render.array.pelis.tpl',
      1 => 1699919557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6552b6cac4c2a6_21202833 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php if ($_smarty_tpl->tpl_vars['user']->value == 1) {?>
      <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" class="nav-link"><button>Borrar</button></a> 
      <a href="modificarview/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
" class="nav-link"><button>Modificar</button></a> 
    <?php }?>
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
<?php if ($_smarty_tpl->tpl_vars['user']->value == 1) {?>
  <div class="contenedor-agregar-pelicula">
    <h2 class="">Agregar un pelicula a la lista!</h2>
    <form class="formulario-agregar-peli" method="post" action="createPeli" enctype="multipart/form-data">
      <label>Nombre de la Pelicula:</label><input type="text" name="name" required>
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
      <label>Año de lanzamiento:</label><input type="text" name="release_date" required>
      <label>Descripcion:</label><input type="text" name="description" required>
      <label>Adjuntar imagen resolucion estandar 300x445:</label><input type="file" name="img">
      <input type="submit" value="Agregar">
    </form>
  </div>
<?php }?>

            <?php }
}
