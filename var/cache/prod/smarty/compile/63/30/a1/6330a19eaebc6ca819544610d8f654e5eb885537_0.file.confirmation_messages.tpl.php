<?php
/* Smarty version 4.2.1, created on 2024-07-15 10:10:38
  from 'C:\xampp\htdocs\prestashop\admins000\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6694f59eb73f39_11509355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6330a19eaebc6ca819544610d8f654e5eb885537' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admins000\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1720992241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694f59eb73f39_11509355 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
