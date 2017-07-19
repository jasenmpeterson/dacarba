<?php

 /* Template Name: Services */

get_header();

include(locate_template('/templates/global/header.php'));
include(locate_template('/templates/global/vars.php'));

use PostQuery\PostQuery;
use ServicesPage\ServicesPage;

$servicesPage = new ServicesPage(32, 1, 'page');
$servicesPage->displayPage();

// reterive post(s) :

$GetPost = new PostQuery();

$GetPost->getPost('service_article', null, 'services_post'); // post type, post per page, acf field
$smarty->assign('ServicesPostObject', $GetPost->CollectedPost);

// smarty :

// page banner :

$smarty->assign('PageBanner', $servicesPage->PageBanner);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/services.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/services.tpl');

endif;

get_footer();
include(locate_template('/templates/global/footer.php'));
