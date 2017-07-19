<?php
/* Smarty version 3.1.30, created on 2017-06-24 01:53:29
  from "/home/ellprevi/dacarba.com/wp-content/themes/dacabra/smarty_templates/pages/industry.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594dc61982d370_01667168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24aa61b2c695b0070fb5254c570cf9df4f71c1e7' => 
    array (
      0 => '/home/ellprevi/dacarba.com/wp-content/themes/dacabra/smarty_templates/pages/industry.tpl',
      1 => 1498267005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_594dc61982d370_01667168 (Smarty_Internal_Template $_smarty_tpl) {
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
