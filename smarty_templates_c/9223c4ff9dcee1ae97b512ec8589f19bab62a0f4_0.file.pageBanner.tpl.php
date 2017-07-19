<?php
/* Smarty version 3.1.30, created on 2017-07-07 22:00:06
  from "/home/opportune/dacarba.com/wp-content/themes/dacarba/smarty_templates/global/pageBanner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59600466f0e826_54593122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9223c4ff9dcee1ae97b512ec8589f19bab62a0f4' => 
    array (
      0 => '/home/opportune/dacarba.com/wp-content/themes/dacarba/smarty_templates/global/pageBanner.tpl',
      1 => 1498591515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59600466f0e826_54593122 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="PageBanner FlexContainer  HorizontalCenterAlign <?php echo $_smarty_tpl->tpl_vars['PageSlug']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['Class']->value;?>
" style="background: url(<?php echo $_smarty_tpl->tpl_vars['PageBanner']->value['BannerImage']['url'];?>
)">
    <section class="tint"></section>
    <section class="container">
        
        <?php if (!empty($_smarty_tpl->tpl_vars['postTitle']->value)) {?><h1 class="ServicesTitle"><?php echo $_smarty_tpl->tpl_vars['postTitle']->value;?>
</h1><?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['postTitle']->value)) {?><h2><?php echo $_smarty_tpl->tpl_vars['PageBanner']->value['BannerTitle'];?>
</h2><?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['PageBanner']->value['BannerIcon'])) {
echo $_smarty_tpl->tpl_vars['PageBanner']->value['BannerIcon'];
}?>
        
        <?php if (empty($_smarty_tpl->tpl_vars['postTitle']->value)) {?><h1><?php echo $_smarty_tpl->tpl_vars['PageBanner']->value['BannerTitle'];?>
</h1><?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['PageBanner']->value['BannerContent'])) {
echo $_smarty_tpl->tpl_vars['PageBanner']->value['BannerContent'];
}?>
        <?php if (!empty($_smarty_tpl->tpl_vars['PageBanner']->value['BannerLink'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['PageBanner']->value['BannerLink'];?>
" class="btn">Who is Dacarba?</a><?php }?>
        <span class="ScrollDownButton">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="926.945 947.945 60.109 60.109">
                <g transform="translate(811.5 954.5)">
                    <circle cx="28.055" cy="28.055" r="28.055" transform="translate(117.445 -4.555)"/>
                    <path d="M129.52 21.014l16.336 7.813 16.336-7.813" />
                </g>
            </svg>
        </span>
    </section>
</section>
<?php if (!empty($_smarty_tpl->tpl_vars['PageBanner']->value['BannerSubContent'])) {?>
<section class="BannerSubContent FlexContainer <?php echo $_smarty_tpl->tpl_vars['PageSlug']->value;?>
">
    <section class="container FlexContainer">
        <?php if (!empty($_smarty_tpl->tpl_vars['PageBanner']->value['BannerSubContentIcon'])) {
echo $_smarty_tpl->tpl_vars['PageBanner']->value['BannerSubContentIcon'];
}?>
        <?php echo $_smarty_tpl->tpl_vars['PageBanner']->value['BannerSubContent'];?>

    </section>
</section>
<?php }
}
}
