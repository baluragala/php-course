<?php
/* Smarty version 3.1.30, created on 2017-03-13 11:48:36
  from "C:\xampp\htdocs\patrick\smarty\views\array.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c679045c5907_35075485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32a04c2336ec0aeaba0baee90ce0f5ae1f4dc741' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\smarty\\views\\array.tpl',
      1 => 1489402103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c679045c5907_35075485 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<body>
<table>
    <tr>
        <td>Name</td>
        <td>Roll</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['students']->value, 'student');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['roll'];?>
</td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
