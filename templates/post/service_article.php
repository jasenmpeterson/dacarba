<?php
include(locate_template('/templates/global/vars.php'));


use PostQuery\PostQuery;
use ServicesPost\ServicesPost;

$servicesPost = new ServicesPost($pageID, 1, 'service_article');
$servicesPost->displayPost();

// page title :

$postTitle = $current_page->post_title;

$smarty->assign('postTitle', $postTitle);

// smarty :

// page banner :

$smarty->assign('PageBanner', $servicesPost->PageBanner);

// post content :

$smarty->assign('PostContent', $servicesPost->ServiceColumns);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/post/services.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/post/services.tpl');

endif;
