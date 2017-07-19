{include file='../global/pageBanner.tpl' PageBanner=$PageBanner PageSlug='industries' Class='PageBannerAlternate'}

<section class="StylizedList FlexContainer">

  <!-- ROW -->
  <section class="row">

    {$industries = 13}

    <!-- CONTENT -->
    <section class="column">

      {foreach $IndustryContent as $Industry}

        <span class="IndustryName">{$Industry['industry']}</span>
        {* Close section.column after every 13th value and start a new column*}
        {if $Industry@iteration is div by $industries}
          </section><section class="column">
        {/if}

      {/foreach}

    </section>


  </section>
  <!-- /ROW -->

</section>
