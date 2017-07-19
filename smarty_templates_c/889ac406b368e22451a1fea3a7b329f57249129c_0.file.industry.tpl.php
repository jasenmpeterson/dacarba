<?php
/* Smarty version 3.1.30, created on 2017-07-17 14:44:31
  from "/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacarba/smarty_templates/pages/industry.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596ccd4f6a7ca8_22628419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '889ac406b368e22451a1fea3a7b329f57249129c' => 
    array (
      0 => '/Users/jasenpeterson/Sites/dacarba/wp-content/themes/dacarba/smarty_templates/pages/industry.tpl',
      1 => 1500302591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_596ccd4f6a7ca8_22628419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>'industries','Class'=>'PageBannerAlternate'), 0, false);
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
