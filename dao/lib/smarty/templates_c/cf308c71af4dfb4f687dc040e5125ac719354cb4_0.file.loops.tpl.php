<?php
/* Smarty version 3.1.30, created on 2017-03-13 10:30:17
  from "C:\xampp\htdocs\patrick\smarty\views\loops.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c666a92b3e64_37993564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf308c71af4dfb4f687dc040e5125ac719354cb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\smarty\\views\\loops.tpl',
      1 => 1489397353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c666a92b3e64_37993564 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>Home</title>
    <link rel="stylesheet" href="/css/master.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
</head>
<body>
<ul>
    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
        <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
    <?php }
}
?>

</ul>
</body>
</html><?php }
}
