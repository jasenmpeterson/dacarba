<?php
/* Smarty version 3.1.30, created on 2017-06-24 00:45:42
  from "/home/ellprevi/public_html/dacarba/wp-content/themes/dacabra/smarty_templates/global/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594db6361c7d04_67059609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99631fcd2deb81b3eb1302ef6012996451b7f3b8' => 
    array (
      0 => '/home/ellprevi/public_html/dacarba/wp-content/themes/dacabra/smarty_templates/global/footer.tpl',
      1 => 1498163082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594db6361c7d04_67059609 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="FlexContainer">

  <!-- ROW -->
  <section class="row">

    <!-- COLUMN -->
    <section class="column FooterLogo SiteLogo">
      <a href="<?php echo $_smarty_tpl->tpl_vars['homeURL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FooterLogo']->value;?>
</a>
    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">

      <section class="FlexContainer">

        <!-- COLUMN -->
        <section class="column FooterMenu Navigation">
          <?php echo $_smarty_tpl->smarty->registered_objects['nav'][0]->displayPrimaryMenu(array(),$_smarty_tpl);?>

        </section>
        <!-- /COLUMN -->

        <!-- COLUMN -->
        <section class="column SocialMediaIcons FooterSocialMediaIcons">
          <a href="<?php echo $_smarty_tpl->tpl_vars['LinkedIn']->value;?>
" target="_blank" class="SocialMediaIcon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="3866.22 86.4 31 31">
                  <path d="M3881.72 86.4a15.5 15.5 0 1 0 15.5 15.5 15.5 15.5 0 0 0-15.5-15.5zm-4.108 23.13h-3.692V98.38h3.694zm-1.83-12.67a1.94 1.94 0 1 1 .038-3.866 1.925 1.925 0 0 1 2.07 1.933 1.975 1.975 0 0 1-2.108 1.933zm15.19 12.67h-3.694v-5.973c0-1.484-.518-2.52-1.864-2.52a2.027 2.027 0 0 0-1.9 1.346 1.97 1.97 0 0 0-.138.932v6.214h-3.727s.033-10.08 0-11.15h3.692v1.586a3.677 3.677 0 0 1 3.35-1.83c2.45 0 4.245 1.588 4.245 5.006v6.386z"/>
              </svg>
          </a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['Twitter']->value;?>
" target="_blank" class="SocialMediaIcon FooterSocialMediaIcon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="3808.581 86.4 31 31">
              <path d="M3824.08 86.4a15.5 15.5 0 1 0 15.5 15.5 15.5 15.5 0 0 0-15.5-15.5zm7.63 13.05v.482a10.522 10.522 0 0 1-16.19 8.868 7.508 7.508 0 0 0 .9.035 7.33 7.33 0 0 0 4.59-1.588 3.692 3.692 0 0 1-3.454-2.547 4.68 4.68 0 0 0 .69.07 2.978 2.978 0 0 0 .967-.14 3.7 3.7 0 0 1-2.97-3.63v-.035a3.43 3.43 0 0 0 1.693.45 3.673 3.673 0 0 1-1.656-3.07 3.445 3.445 0 0 1 .518-1.865 10.45 10.45 0 0 0 7.63 3.866 3.4 3.4 0 0 1-.1-.83 3.7 3.7 0 0 1 3.693-3.693 3.62 3.62 0 0 1 2.69 1.177 8.064 8.064 0 0 0 2.347-.9 3.672 3.672 0 0 1-1.622 2.037 7.57 7.57 0 0 0 2.14-.587 8.112 8.112 0 0 1-1.864 1.9z"/>
              </svg>
          </a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['Facebook']->value;?>
" target="_blank" class="SocialMediaIcon FooterSocialMediaIcon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="8178 57.477 30.992 30.992">
              <path d="M8193.5 57.477a15.5 15.5 0 1 0 15.5 15.5 15.487 15.487 0 0 0-15.5-15.5zm3.816 16.04h-2.496v8.96h-3.738v-8.96h-1.79v-3.19h1.79V68.3a3.47 3.47 0 0 1 3.738-3.737h2.725v3.114h-2.024a.75.75 0 0 0-.777.857v1.87h2.8zm0 0"/>
              </svg>
          </a>
        </section>
        <!-- /COLUMN -->

      </section>

    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

</footer>
<?php }
}
