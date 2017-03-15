<?php
/* Smarty version 3.1.30, created on 2017-03-15 13:20:39
  from "C:\xampp\htdocs\patrick\smarty\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c931973b4b37_11762437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c15368e6b8df9ad56f417d7aa6df3f95c8ea1a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\smarty\\views\\layout.tpl',
      1 => 1489580306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c931973b4b37_11762437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153368718158c931973a1262_13991781', 'title');
?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65808054058c931973a59f4_17457139', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_153368718158c931973a1262_13991781 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Course Manager<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_65808054058c931973a59f4_17457139 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
