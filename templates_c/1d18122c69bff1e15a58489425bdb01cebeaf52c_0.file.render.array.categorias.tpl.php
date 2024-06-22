<?php
/* Smarty version 4.3.4, created on 2023-10-16 22:52:19
  from 'C:\xampp\htdocs\Projects\trabajotp1\templates\render.array.categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652da283eed584_56682687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d18122c69bff1e15a58489425bdb01cebeaf52c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\trabajotp1\\templates\\render.array.categorias.tpl',
      1 => 1697488445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.php' => 1,
    'file:templates/footer.html' => 1,
  ),
),false)) {
function content_652da283eed584_56682687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['user']->value == 1) {?>
    <a href="agregarcategoriaview"><button>Agregar una nueva categoria</button></a>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    <div class="contenedor-categoria">
        <a href="categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categorie;?>
" class="nav-link"><h1><?php echo $_smarty_tpl->tpl_vars['categoria']->value->categorie;?>
</h1></a>
        <?php if ($_smarty_tpl->tpl_vars['user']->value == 1) {?>
            <a href="eliminarcategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categorie;?>
" class="nav-link"><button>Borrar</button></a>  
            <form method="post" action="modificarcategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categorie;?>
" enctype="multipart/form-data">
                    <label>Cambiar-Titulo:</label><input type="text" name="titulocategoria" required>
                    <input type="submit">
        <?php }?>
    </div>    
    </form>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
