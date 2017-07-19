{foreach from=$PagePortals key=PagePortalKey item=PagePortal name=PagePortal}
<section class="PagePortal FlexContainer {$PageSlug}">

  <!-- ROW -->
  <section class="row {if $smarty.foreach.PagePortal.iteration is even}row-reverse PagePortalEven{else}PagePortalOdd{/if}">
      <!-- COLUMN -->
      <div class="column PagePortalImage">
          <section class="box">
              <img src="{$PagePortal[0][0].image.url}"/>
          </section>
      </div>
      <!-- /COLUMN -->

      <!-- COLUMN -->
      <div class="column PagePortalContent">

         <section class="FlexContainer">
           
              <!-- ROW -->
              <section class="row {if $smarty.foreach.PagePortal.iteration is even}row-reverse PagePortalEven{/if}">

                  <!-- COLUMN -->
                  <div class="column PagePortalTitle">
                      <div class="TitleWrap"><h2>{$PagePortal[0][0].title}</h2></div>
                  </div>
                  <!-- /COLUMN -->

                  <!-- COLUMN -->
                  <div class="column PagePortalIcon">
                      {$PagePortal[0][0].icon}
                  </div>
                  <!-- /COLUMN -->

              </section>
              <!-- /ROW -->

          </section>

          <h1>{$PagePortal[0][0].sub_title}</h1>

          {$PagePortal[0][0].content}

          <a href="{$PagePortal[0][0].page_link}" class="btn GoldBorder">
              Learn More About Our {$PagePortal[0][0].title}
          </a>

      </div>
      <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

</section>
{/foreach}
