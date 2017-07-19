<?php
/* Smarty version 3.1.30, created on 2017-06-22 20:33:55
  from "/home/ellprevi/public_html/dacabra/wp-content/themes/dacabra/smarty_templates/pages/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594c29b364a7c9_10103244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1875fd0d3adc8015cc69f1232dda8e8305f1f8bc' => 
    array (
      0 => '/home/ellprevi/public_html/dacabra/wp-content/themes/dacabra/smarty_templates/pages/about.tpl',
      1 => 1498163082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_594c29b364a7c9_10103244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>$_smarty_tpl->tpl_vars['pageSlug']->value,'Class'=>''), 0, false);
?>

<section class="InteriorPageWrap <?php echo $_smarty_tpl->tpl_vars['pageSlug']->value;?>
 FlexContainer">

  <!-- ROW -->
  <section class="row FirstContentBlock">

    <!-- COLUMN -->
    <section class="column">

      <section class="SectionLabel">
        <section class="Label"><?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['SectionLabel'];?>
</section>
        <section class="OffSetBackground"></section>
      </section>

      <?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['FirstContentBlock'];?>


    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      <?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['FirstContentBlockImage'];?>

    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  <!-- ROW -->
  <section class="row SecondContentBlock">

    <!-- COLUMN -->
    <section class="column">

      <img src="<?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['SecondContentBlockImage']['url'];?>
" alt="$AboutContent.SecondContentBlockImage.alt">

    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      <?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['SecondContentBlock'];?>

    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  <!-- ROW -->
  <section class="row ThirdContentBlock">

    <!-- COLUMN -->
    <section class="column">
      <?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['ThirdContentBlock'];?>

    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      <img src="<?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['ThirdContentBlockImage']['url'];?>
" alt="$AboutContent.ThirdContentBlockImage.alt">
    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  <!-- ROW -->
  <section class="row FourthContentBlock">

    <!-- COLUMN -->
    <section class="column">
      <?php echo $_smarty_tpl->tpl_vars['AboutContent']->value['FourthContentBlock'];?>

    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->


</section>
<?php }
}
