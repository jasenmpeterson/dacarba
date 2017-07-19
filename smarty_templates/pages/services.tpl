{include file='../global/pageBanner.tpl' PageBanner=$PageBanner PageSlug='services' Class='PageBannerAlternate'}

<section class="AlternateDescriptionModules FlexContainer services">

  <!-- ROW -->
  <section class="row">

    {foreach from=$ServicesPostObject['service_article'] key=k item=Service}

    <!-- COLUMN -->
    <section class="column">

      <a href="{$Service.URL}" class="BoxLink">

        <section class="box .FlexContainer">

          <!-- ROW -->
          <section class="row">

            <!-- COLUMN -->
            <section class="column Icon">
              {$Service['Services'].Icon}
            </section>
            <!-- /COLUMN -->

            <!-- COLUMN -->
            <section class="column SectionLabel">
              <section class="Label">{$Service['Services'].Label}</section>
            </section>
            <!-- /COLUMN -->

          </section>
          <!-- /ROW -->

        </section>

      </a>

    </section>
    <!-- /COLUMN -->

    {/foreach}

  </section>
  <!-- /ROW -->

</section>
