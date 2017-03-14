<?php
/* Smarty version 3.1.30, created on 2017-03-13 11:59:49
  from "C:\xampp\htdocs\patrick\smarty\views\calendar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c67ba5ab3a91_01812121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea78b317b476a90e6c41a65f6039461de032b82e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\smarty\\views\\calendar.tpl',
      1 => 1489402661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c67ba5ab3a91_01812121 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_table')) require_once 'C:\\xampp\\htdocs\\patrick\\smarty\\lib\\smarty\\plugins\\function.html_table.php';
?>
<html>
<body>
<b><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b>
<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['special_days']->value,'cols'=>7),$_smarty_tpl);?>

</body>
</html><?php }
}
