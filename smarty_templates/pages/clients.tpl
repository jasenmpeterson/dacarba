{include file='../global/pageBanner.tpl' PageBanner=$PageBanner PageSlug='clients' Class='PageBannerAlternate'}
<section class="DescriptionModules FlexContainer clients">

  {foreach from=$ClientsContent item=Client}

  <!-- ROW -->
  <section class="row">

    <!-- COLUMN -->
    <section class="column BackgroundImage" style="background: url({$Client.image.url})">

      <section class="SectionLabel">
        <section class="Label">{$Client.clients_label}</section>
        <section class="OffSetBackground"></section>
      </section>

    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column Content">
      {$Client.content}
    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  {/foreach}

</section>
