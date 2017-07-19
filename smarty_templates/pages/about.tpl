{include file='../global/pageBanner.tpl' PageBanner=$PageBanner PageSlug='about' Class=''}
<section class="InteriorPageWrap about FlexContainer">

  <!-- ROW -->
  <section class="row FirstContentBlock">

    <!-- COLUMN -->
    <section class="column">

      <section class="SectionLabel">
        <section class="Label">{$AboutContent.SectionLabel}</section>
        <section class="OffSetBackground"></section>
      </section>

      {$AboutContent.FirstContentBlock}

    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      {$AboutContent.FirstContentBlockImage}
    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  <!-- ROW -->
  <section class="row SecondContentBlock">

    <!-- COLUMN -->
    <section class="column">

      <img src="{$AboutContent.SecondContentBlockImage.url}" alt="$AboutContent.SecondContentBlockImage.alt">

    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      {$AboutContent.SecondContentBlock}
    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  <!-- ROW -->
  <section class="row ThirdContentBlock">

    <!-- COLUMN -->
    <section class="column">
      {$AboutContent.ThirdContentBlock}
    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      <img src="{$AboutContent.ThirdContentBlockImage.url}" alt="$AboutContent.ThirdContentBlockImage.alt">
    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

  <!-- ROW -->
  <section class="row FourthContentBlock">

    <!-- COLUMN -->
    <section class="column">
      {$AboutContent.FourthContentBlock}
    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->


</section>
