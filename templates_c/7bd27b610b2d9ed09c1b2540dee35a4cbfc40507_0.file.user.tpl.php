<?php
/* Smarty version 4.3.4, created on 2023-10-16 21:57:38
  from 'C:\xampp\htdocs\Projects\trabajotp1\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d95b2093184_02660295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bd27b610b2d9ed09c1b2540dee35a4cbfc40507' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\trabajotp1\\templates\\user.tpl',
      1 => 1697484780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d95b2093184_02660295 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="tituloTable">Hola <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
!!</h1>
<a class="btn" href="logout"><button>Log Out</button></a>
<?php }
}
