{include file='../global/pageBanner.tpl' PageBanner=$PageBanner PageSlug='insights' Class='PageBannerAlternate'}

<section class="AlternateDescriptionModules FlexContainer insights">

  <!-- ROW -->
  <section class="row">

    {foreach from=$InsightsPostObject['insight_article'] key=k item=Insight}

    <!-- COLUMN -->
    <section class="column">

      <a href="{$Insight.URL}" class="BoxLink">

        <section class="box .FlexContainer">

          <!-- ROW -->
          <section class="row">

            <!-- COLUMN -->
            <section class="column Image" style="background: url({$Insight['Insights']['Thumbnail'][0]['image'].url})">
            </section>
            <!-- /COLUMN -->

            <!-- COLUMN -->
            <section class="column SectionLabel">
              <section class="Label">
                <section>
                  <h1>{$Insight.Title}</h1>
                  <span class="PostDate">{$Insight.Date}</span>
                  <span class="PostAuthor">{$Insight.Author}</span>
                </section>
              </section>
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
