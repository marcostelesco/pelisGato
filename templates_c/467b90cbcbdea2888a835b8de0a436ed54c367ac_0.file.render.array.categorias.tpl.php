<?php
/* Smarty version 4.3.4, created on 2023-10-12 23:45:06
  from 'C:\xampp\htdocs\trabajotp1modificar\templates\render.array.categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652868e2127027_04930641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '467b90cbcbdea2888a835b8de0a436ed54c367ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajotp1modificar\\templates\\render.array.categorias.tpl',
      1 => 1697067144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.php' => 1,
    'file:templates/footer.html' => 1,
  ),
),false)) {
function content_652868e2127027_04930641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<h3>Algún contenido aca</h3>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    <a href="categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categorie;?>
" class="nav-link"><h1><?php echo $_smarty_tpl->tpl_vars['categoria']->value->categorie;?>
</h1></a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
