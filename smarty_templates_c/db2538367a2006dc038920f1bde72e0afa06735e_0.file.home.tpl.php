<?php
/* Smarty version 3.1.30, created on 2017-06-27 20:15:36
  from "/home/opportune/dacarba.com/wp-content/themes/dacabra/smarty_templates/pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952bce88c6592_05103236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db2538367a2006dc038920f1bde72e0afa06735e' => 
    array (
      0 => '/home/opportune/dacarba.com/wp-content/themes/dacabra/smarty_templates/pages/home.tpl',
      1 => 1498591516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
    'file:../global/pagePortal.tpl' => 1,
  ),
),false)) {
function content_5952bce88c6592_05103236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>'home','Class'=>''), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../global/pagePortal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PagePortals'=>$_smarty_tpl->tpl_vars['PagePortals']->value,'PageSlug'=>'home'), 0, false);
?>

<?php }
}
