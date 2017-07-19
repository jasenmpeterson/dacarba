<?php
/* Smarty version 3.1.30, created on 2017-07-08 03:24:33
  from "/home/opportune/dacarba.com/wp-content/themes/dacarba/smarty_templates/pages/industry.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5960507158f220_76826542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5365e8cbc1a61d3bb0ce2304c3f594e2f2177dc8' => 
    array (
      0 => '/home/opportune/dacarba.com/wp-content/themes/dacarba/smarty_templates/pages/industry.tpl',
      1 => 1498591516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_5960507158f220_76826542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>$_smarty_tpl->tpl_vars['pageSlug']->value,'Class'=>'PageBannerAlternate'), 0, false);
?>


<section class="StylizedList FlexContainer">

  <!-- ROW -->
  <section class="row">

    <?php $_smarty_tpl->_assignInScope('industries', 13);
?>

    <!-- CONTENT -->
    <section class="column">

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IndustryContent']->value, 'Industry');
$_smarty_tpl->tpl_vars['Industry']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Industry']->value) {
$_smarty_tpl->tpl_vars['Industry']->iteration++;
$__foreach_Industry_0_saved = $_smarty_tpl->tpl_vars['Industry'];
?>

        <span class="IndustryName"><?php echo $_smarty_tpl->tpl_vars['Industry']->value['industry'];?>
</span>
        
        <?php if (!($_smarty_tpl->tpl_vars['Industry']->iteration % $_smarty_tpl->tpl_vars['industries']->value)) {?>
          </section><section class="column">
        <?php }?>

      <?php
$_smarty_tpl->tpl_vars['Industry'] = $__foreach_Industry_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </section>


  </section>
  <!-- /ROW -->

</section>
<?php }
}
