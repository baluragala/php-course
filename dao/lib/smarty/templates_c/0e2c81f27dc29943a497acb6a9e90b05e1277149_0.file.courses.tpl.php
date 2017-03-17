<?php
/* Smarty version 3.1.30, created on 2017-03-15 13:24:02
  from "C:\xampp\htdocs\patrick\smarty\views\courses.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c932625ce5a4_71741184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e2c81f27dc29943a497acb6a9e90b05e1277149' => 
    array (
      0 => 'C:\\xampp\\htdocs\\patrick\\smarty\\views\\courses.tpl',
      1 => 1489580641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58c932625ce5a4_71741184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40601140258c932625cbae5_67691960', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113021454858c932625cdbd8_13669906', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_40601140258c932625cbae5_67691960 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Courses<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_113021454858c932625cdbd8_13669906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>List of courses</h1>
    <table border="1">
        <thead>
        <tr>
            <td>Title</td>
            <td>Category</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Php 101</td>
            <td>Web</td>
        </tr>
        <tr>
            <td>Php 101</td>
            <td>Web</td>
        </tr>
        <tr>
            <td>Php 101</td>
            <td>Web</td>
        </tr>
        <tr>
            <td>Php 101</td>
            <td>Web</td>
        </tr>
        <tr>
            <td>Php 101</td>
            <td>Web</td>
        </tr>
        <tr>
            <td>Php 101</td>
            <td>Web</td>
        </tr>
        </tbody>
    </table>
<?php
}
}
/* {/block 'body'} */
}
