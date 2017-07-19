{include file='../global/pageBanner.tpl' PageBanner=$PageBanner PageSlug=$pageSlug Class='PageBannerAlternate Generic'}

<section class="FlexContainer InsightArticle GenericPage">

  <!-- ROW -->
  <section class="row">

    <!-- COLUMN -->
    <section class="column Content">
      <h1>{$postTitle}</h1>
      <span class="PostDate">{$PageDate}</span>
      <span class="PageAuthor">by {$PageAuthor}</span>
      {$PageContent}
    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column ContactContactSubscribe">
      <section class="box">
        <h1>Subscribe</h1>
        {$Subscribe}
      </section>
    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

</section>
