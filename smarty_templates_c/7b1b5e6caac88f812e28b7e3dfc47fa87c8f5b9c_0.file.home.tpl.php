<?php
/* Smarty version 3.1.30, created on 2017-07-14 22:19:22
  from "/home/opportune/dacarba.com/wp-content/themes/dacarba/smarty_templates/pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5969436a7f7989_12689123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b1b5e6caac88f812e28b7e3dfc47fa87c8f5b9c' => 
    array (
      0 => '/home/opportune/dacarba.com/wp-content/themes/dacarba/smarty_templates/pages/home.tpl',
      1 => 1500070755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
    'file:../global/pagePortal.tpl' => 1,
  ),
),false)) {
function content_5969436a7f7989_12689123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>'home','Class'=>''), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../global/pagePortal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PagePortals'=>$_smarty_tpl->tpl_vars['PagePortals']->value,'PageSlug'=>'home'), 0, false);
?>

<?php }
}
