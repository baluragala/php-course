<?php
/* Smarty version 3.1.30, created on 2017-03-17 14:17:07
  from "C:\xampp\htdocs\patrick\dao\views\depts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cbe1d334e2c8_44156169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d43e34729352eddbf77d2d16a54022e3a46189e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\dao\\views\\depts.tpl',
      1 => 1489756625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cbe1d334e2c8_44156169 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head></head>
<body>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'dept');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dept']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['dept']->value->getDeptNo();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['dept']->value->getDeptName();?>
</td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <form>
        <input type="text"/>
    </form>
</table>
</body>
</html><?php }
}
