<?php
/* Smarty version 3.1.30, created on 2017-06-24 01:55:05
  from "/home/ellprevi/dacarba.com/wp-content/themes/dacabra/smarty_templates/pages/insights.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594dc6793af786_25126221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1cdbf6400ce2a07024592bcef3d2156fc880df1' => 
    array (
      0 => '/home/ellprevi/dacarba.com/wp-content/themes/dacabra/smarty_templates/pages/insights.tpl',
      1 => 1498267005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_594dc6793af786_25126221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>$_smarty_tpl->tpl_vars['pageSlug']->value,'Class'=>'PageBannerAlternate'), 0, false);
?>


<section class="AlternateDescriptionModules FlexContainer insights">

  <!-- ROW -->
  <section class="row">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['InsightsPostObject']->value['insight_article'], 'Insight', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['Insight']->value) {
?>

    <!-- COLUMN -->
    <section class="column">

      <a href="<?php echo $_smarty_tpl->tpl_vars['Insight']->value['URL'];?>
" class="BoxLink">

        <section class="box .FlexContainer">

          <!-- ROW -->
          <section class="row">

            <!-- COLUMN -->
            <section class="column Image" style="background: url(<?php echo $_smarty_tpl->tpl_vars['Insight']->value['Insights']['Thumbnail'][0]['image']['url'];?>
)">
            </section>
            <!-- /COLUMN -->

            <!-- COLUMN -->
            <section class="column SectionLabel">
              <section class="Label">
                <h1><?php echo $_smarty_tpl->tpl_vars['Insight']->value['Title'];?>
</h1>
                <span class="PostDate"><?php echo $_smarty_tpl->tpl_vars['Insight']->value['Date'];?>
</span>
                <span class="PostAuthor"><?php echo $_smarty_tpl->tpl_vars['Insight']->value['Author'];?>
</span>
              </section>
            </section>
            <!-- /COLUMN -->

          </section>
          <!-- /ROW -->

        </section>

      </a>

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
