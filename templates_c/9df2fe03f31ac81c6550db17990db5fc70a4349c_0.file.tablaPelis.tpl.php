<?php
/* Smarty version 4.3.4, created on 2023-10-09 20:53:22
  from 'C:\xampp\htdocs\Projects\trabajotp1\temples\tablaPelis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65244c22e01181_39930667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9df2fe03f31ac81c6550db17990db5fc70a4349c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\trabajotp1\\temples\\tablaPelis.tpl',
      1 => 1696877434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.php' => 1,
    'file:templates/footer.html' => 1,
  ),
),false)) {
function content_65244c22e01181_39930667 (Smarty_Internal_Template $_smarty_tpl) {
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
        <td><?php echo $_smarty_tpl->tpl_vars['peli']->value->name;?>
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
