<?php
/* Smarty version 3.1.30, created on 2017-07-10 17:53:51
  from "/home/opportune/dacarba.com/wp-content/themes/dacarba/smarty_templates/post/services.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5963bf2feca0a6_74214752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ac18c0285431dc13423ec57ab1cd495ee989787' => 
    array (
      0 => '/home/opportune/dacarba.com/wp-content/themes/dacarba/smarty_templates/post/services.tpl',
      1 => 1498591517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_5963bf2feca0a6_74214752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>$_smarty_tpl->tpl_vars['pageSlug']->value,'Class'=>'PageBannerAlternate Services'), 0, false);
?>


<section class="FlexContainer Services Container">

  <!-- ROW -->
  <section class="row">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PostContent']->value, 'Content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Content']->value) {
?>

      <!-- COLUMN -->
      <section class="Services column">
        <?php if (!empty($_smarty_tpl->tpl_vars['Content']->value['label'])) {?><h2><?php echo $_smarty_tpl->tpl_vars['Content']->value['label'];?>
</h2><?php }?>
        <?php echo $_smarty_tpl->tpl_vars['Content']->value['content'];?>

      </section>
      <!-- /COLUMN -->

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


  </section>
  <!-- /ROW -->

</section>
<?php }
}
