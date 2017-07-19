<?php
/* Smarty version 3.1.30, created on 2017-06-27 20:19:38
  from "/home/opportune/dacarba.com/wp-content/themes/dacabra/smarty_templates/pages/clients.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952bdda414bc7_53953019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3f9bdf19f8741f89fb08d25e967607cb14cff10' => 
    array (
      0 => '/home/opportune/dacarba.com/wp-content/themes/dacabra/smarty_templates/pages/clients.tpl',
      1 => 1498591516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_5952bdda414bc7_53953019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>$_smarty_tpl->tpl_vars['pageSlug']->value,'Class'=>'PageBannerAlternate'), 0, false);
?>

<section class="DescriptionModules FlexContainer clients">

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ClientsContent']->value, 'Client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Client']->value) {
?>

  <!-- ROW -->
  <section class="row">

    <!-- COLUMN -->
    <section class="column BackgroundImage" style="background: url(<?php echo $_smarty_tpl->tpl_vars['Client']->value['image']['url'];?>
)">

      <section class="SectionLabel">
        <section class="Label"><?php echo $_smarty_tpl->tpl_vars['Client']->value['clients_label'];?>
</section>
        <section class="OffSetBackground"></section>
      </section>

    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column Content">
      <?php echo $_smarty_tpl->tpl_vars['Client']->value['content'];?>

    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</section>
<?php }
}
