<?php
/* Smarty version 4.2.1, created on 2024-07-15 10:10:33
  from 'C:\xampp\htdocs\prestashop\admins000\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6694f5990ca373_63009715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9d764f9995bf0240b9ee43928c058b6d03cc86f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admins000\\themes\\new-theme\\template\\content.tpl',
      1 => 1720992240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694f5990ca373_63009715 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
