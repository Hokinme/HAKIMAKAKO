<?php
/* Smarty version 4.2.1, created on 2024-07-15 10:08:37
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6694f5251693b3_98035892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bea152bc88d6ad4c16c87750962bcaf4f57aa3' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1720992939,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694f5251693b3_98035892 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
  <li>
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlistsTitlePage']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
      <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blockwishlist']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

    </a>
  </li>
<?php }
}
}
