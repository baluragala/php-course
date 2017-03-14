<?php
/* Smarty version 3.1.30, created on 2017-03-13 11:54:30
  from "C:\xampp\htdocs\patrick\smarty\views\logical.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c67a66ce5401_93140346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18f8d8d5a3a47a9e1a0a21b89615e16afe86f83a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\smarty\\views\\logical.tpl',
      1 => 1489402468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c67a66ce5401_93140346 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<body>
<table>
    <tr>
        <td>Name</td>
        <td>Roll</td>
        <td>Grade</td>
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
            <?php if ($_smarty_tpl->tpl_vars['student']->value['grade'] == 'F') {?>
                <td bgcolor='red'>Failed</td>
            <?php } else { ?>
                <td bgcolor='green'>Passed</td>
            <?php }?>
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
