<?php
namespace InsightsPost;

use RetrievePost\RetrievePost;

class InsightsPost extends RetrievePost
{
    public $PageBanner;
    public $PageContent;
    public $PageDate;
    public $PageAuthor;

    public function displayPost()
    {
        if (have_rows('page_banner')) :

          while (have_rows('page_banner')) : the_row();

        $this->PageBanner = array(
                  'BannerImage' => get_sub_field('image'),
                  'BannerTitle' => get_sub_field('title'),
                  'BannerContent' => get_sub_field('content'),
                  'BannerSubContent' => get_sub_field('sub_content'),
                  'BannerSubContentIcon' => get_sub_field('sub_content_icon'),
                  'BannerLink' => get_sub_field('page_link'),
                  'BannerIcon' => get_sub_field('icon'),
              );

        endwhile;

        endif;

        $this->PageContent = wpautop(get_the_content());
        $this->PageDate = get_the_date('M. j, Y');
        $this->PageAuthor = get_the_author();
    }
}
