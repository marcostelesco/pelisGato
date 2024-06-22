<?php
/* Smarty version 4.3.4, created on 2023-10-09 21:59:21
  from 'C:\xampp\htdocs\Projects\trabajotp1\templates\tarjetaPeli.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65245b9969f4b9_56505108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e614c274c567e577e3ea2f8a57d0b6782920afb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\trabajotp1\\templates\\tarjetaPeli.tpl',
      1 => 1696881559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.php' => 1,
    'file:templates/footer.html' => 1,
  ),
),false)) {
function content_65245b9969f4b9_56505108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <img src='<?php echo $_smarty_tpl->tpl_vars['peli']->value->url_img;?>
'>
    <h2><?php echo $_smarty_tpl->tpl_vars['peli']->value->name;?>
</h2>
    <h4>Categoria:<?php echo $_smarty_tpl->tpl_vars['peli']->value->categorie;?>
 Año:<?php echo $_smarty_tpl->tpl_vars['peli']->value->release_date;?>
</h4>
    <h5><?php echo $_smarty_tpl->tpl_vars['peli']->value->description;?>
</h5>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
