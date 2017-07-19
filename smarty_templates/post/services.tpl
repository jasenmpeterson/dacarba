{include file='../global/pageBanner.tpl' PageBanner=$PageBanner PageSlug=$pageSlug Class='PageBannerAlternate Services'}

<section class="FlexContainer Services Container">

  <!-- ROW -->
  <section class="row">

    {foreach from=$PostContent item=Content}

      <!-- COLUMN -->
      <section class="Services column">
        {if !empty($Content.label)}<h2>{$Content.label}</h2>{/if}
        {$Content.content}
      </section>
      <!-- /COLUMN -->

    {/foreach}

  </section>
  <!-- /ROW -->

</section>
