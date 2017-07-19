<?php
include(locate_template('/templates/global/vars.php'));


use PostQuery\PostQuery;
use InsightsPage\InsightsPage;

$insightsPage = new InsightsPage(38, 1, 'page');
$insightsPage->displayPage();

// reterive post(s) :

$GetPost = new PostQuery();

$GetPost->getPost('insight_article', null, null); // post type, post per page, acf field
$smarty->assign('InsightsPostObject', $GetPost->CollectedPost);

// smarty :

// page banner :

$smarty->assign('PageBanner', $insightsPage->PageBanner);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/insights.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/insights.tpl');

endif;
