<?php
include(locate_template('/templates/global/vars.php'));


use PostQuery\PostQuery;
use InsightsPost\InsightsPost;

$insightsPost = new InsightsPost($pageID, 1, 'insight_article');
$insightsPost->displayPost();

// page title :

$postTitle = $current_page->post_title;

$smarty->assign('postTitle', $postTitle);
$smarty->assign('Subscribe', do_shortcode('[ctct form="186"]'));

// smarty :

// page banner :

$smarty->assign('PageBanner', $insightsPost->PageBanner);

// post content :

$smarty->assign('PageContent', $insightsPost->PageContent);
$smarty->assign('PageAuthor', $insightsPost->PageAuthor);
$smarty->assign('PageDate', $insightsPost->PageDate);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/post/insights.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/post/insights.tpl');

endif;
