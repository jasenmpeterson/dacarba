<?php

 /* Template Name: Contact */

get_header();

include(locate_template('/templates/global/header.php'));
include(locate_template('/templates/global/vars.php'));

$smarty->assign('Offices', get_field('offices', $pageID));

$form = do_shortcode('[contact-form-7 id="174" title="Contact form 1"]');

$smarty->assign('Form', $form);

// page title :

$postTitle = $current_page->post_title;

$smarty->assign('postTitle', $postTitle);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/contact.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/contact.tpl');

endif;

get_footer();
include(locate_template('/templates/global/footer.php'));
