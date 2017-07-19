<?php
/* Smarty version 3.1.30, created on 2017-07-12 22:54:21
  from "/home/opportune/dacarba.com/wp-content/themes/dacarba/smarty_templates/pages/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5966a89d25a904_09147800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd704510553b269b960ad070f35ea6625dc1da2be' => 
    array (
      0 => '/home/opportune/dacarba.com/wp-content/themes/dacarba/smarty_templates/pages/about.tpl',
      1 => 1499900030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../global/pageBanner.tpl' => 1,
  ),
),false)) {
function content_5966a89d25a904_09147800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../global/pageBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('PageBanner'=>$_smarty_tpl->tpl_vars['PageBanner']->value,'PageSlug'=>'about','Class'=>''), 0, false);
?>

<section class="InteriorPageWrap about FlexContainer">

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
