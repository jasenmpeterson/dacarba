<?php

 /* Template Name: Industries */

get_header();

include(locate_template('/templates/global/header.php'));
include(locate_template('/templates/global/vars.php'));

// home :

use IndustryPage\IndustryPage;

$industriesPage = new IndustryPage(34, 1, 'page');
$industriesPage->displayPage();

// smarty :

// page banner :

$smarty->assign('PageBanner', $industriesPage->PageBanner);

// services content :

$smarty->assign('IndustryContent', $industriesPage->IndustryContent);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/industry.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/industry.tpl');

endif;

get_footer();
include(locate_template('/templates/global/footer.php'));
