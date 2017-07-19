<h1 class="ContactTitle">{$postTitle}</h1>
<section class="Contact FlexContainer">

  <!-- ROW -->
  <section class="row">

    <!-- COLUMN -->
    <section class="column">

      {foreach $Offices as $Office}
      <address>
        <h1>{$Office.location}</h1>
        {$Office.address}
      </address>
      {/foreach}

    </section>
    <!-- /COLUMN -->

    <!-- COLUMN -->
    <section class="column">
      {$Form}
    </section>
    <!-- /COLUMN -->

  </section>
  <!-- /ROW -->

</section>
