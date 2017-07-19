<?php

include(locate_template('/templates/global/vars.php'));
include(locate_template('/templates/global/navigation.php'));

// smarty :

// logo :

$smarty->assign('SiteLogo', get_field('logo', 'option'));

// social media :

$smarty->assign('Twitter', get_field('twitter', 'option'));
$smarty->assign('LinkedIn', get_field('linkedin', 'option'));
$smarty->assign('Facebook', get_field('facebook', 'option'));

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/global/header.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/global/header.tpl');

endif;
