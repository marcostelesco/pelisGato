<?php
/* Smarty version 4.3.4, created on 2023-10-10 19:53:10
  from 'C:\xampp\htdocs\Projects\trabajotp1\templates\tablaPelis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65258f86ab0df3_64845859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd69aa059d3369895bc6e4f129fd2113176a65130' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\trabajotp1\\templates\\tablaPelis.tpl',
      1 => 1696960387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.php' => 1,
    'file:templates/footer.html' => 1,
  ),
),false)) {
function content_65258f86ab0df3_64845859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="">
    <thead class="">
        <tr>
            <th>Portada</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pelis']->value, 'peli');
$_smarty_tpl->tpl_vars['peli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
$_smarty_tpl->tpl_vars['peli']->do_else = false;
?>
    <th>
        <td><img src='<?php echo $_smarty_tpl->tpl_vars['peli']->value->url_img;?>
' alt=""></td>
        <td ><a href="pelicula/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['peli']->value->name;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['peli']->value->description;?>
</td>
    </th>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>



<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
