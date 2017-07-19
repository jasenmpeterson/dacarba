<?php
/* Smarty version 3.1.30, created on 2017-06-27 20:22:20
  from "/home/opportune/dacarba.com/wp-content/themes/dacabra/smarty_templates/pages/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952be7c91b115_68609656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ea79f06c5ea185427036352b85ee6b8a681137d' => 
    array (
      0 => '/home/opportune/dacarba.com/wp-content/themes/dacabra/smarty_templates/pages/contact.tpl',
      1 => 1498591516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952be7c91b115_68609656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="ContactTitle"><?php echo $_smarty_tpl->tpl_vars['postTitle']->value;?>
</h1>
<section class="Contact FlexContainer">

  <!-- ROW -->
  <section class="row">

    <!-- COLUMN -->
    <section class="column">

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Offices']->value, 'Office');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Office']->value) {
?>
      <address>
        <h1><?php echo $_smarty_tpl->tpl_vars['Office']->value['location'];?>
</h1>
        <?php echo $_smarty_tpl->tpl_vars['Office']->value['address'];?>

      </address>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      <?php echo $_smarty_tpl->tpl_vars['Form']->value;?>

    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

</section>
<?php }
}
