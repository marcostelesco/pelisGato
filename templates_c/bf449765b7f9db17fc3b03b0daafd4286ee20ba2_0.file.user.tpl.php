<?php
/* Smarty version 4.3.4, created on 2023-10-16 21:33:01
  from 'C:\xampp\htdocs\trabajotp1\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d8fedce31b8_90496076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf449765b7f9db17fc3b03b0daafd4286ee20ba2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajotp1\\templates\\user.tpl',
      1 => 1697484780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d8fedce31b8_90496076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="tituloTable">Hola <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
!!</h1>
<a class="btn" href="logout"><button>Log Out</button></a>
<?php }
}
