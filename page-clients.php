<?php

 /* Template Name: Clients */

get_header();

include(locate_template('/templates/global/header.php'));
include(locate_template('/templates/global/vars.php'));

// home :

use ClientsPage\ClientsPage;

$clientsPage = new ClientsPage(30, 1, 'page');
$clientsPage->displayPage();

// smarty :

// page banner :

$smarty->assign('PageBanner', $clientsPage->PageBanner);

// clients content :

$smarty->assign('ClientsContent', $clientsPage->ClientsContent);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/clients.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/clients.tpl');

endif;

get_footer();
include(locate_template('/templates/global/footer.php'));
