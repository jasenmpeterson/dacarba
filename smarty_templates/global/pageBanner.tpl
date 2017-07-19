<section class="PageBanner FlexContainer  HorizontalCenterAlign {$PageSlug} {$Class}" style="background: url({$PageBanner.BannerImage.url})">
    <section class="tint"></section>
    <section class="container">
        {* The post title is specific to services post pages (at the moment) *}
        {if !empty($postTitle)}<h1 class="ServicesTitle">{$postTitle}</h1>{/if}
        {if !empty($postTitle)}<h2>{$PageBanner.BannerTitle}</h2>{/if}

        {if !empty($PageBanner.BannerIcon)}{$PageBanner.BannerIcon}{/if}
        {* Will not be displayed on services post pages *}
        {if empty($postTitle)}<h1>{$PageBanner.BannerTitle}</h1>{/if}
        {if !empty($PageBanner.BannerContent)}{$PageBanner.BannerContent}{/if}
        {if !empty($PageBanner.BannerLink)}<a href="{$PageBanner.BannerLink}" class="btn">Who is Dacarba?</a>{/if}
        <span class="ScrollDownButton">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="926.945 947.945 60.109 60.109">
                <g transform="translate(811.5 954.5)">
                    <circle cx="28.055" cy="28.055" r="28.055" transform="translate(117.445 -4.555)"/>
                    <path d="M129.52 21.014l16.336 7.813 16.336-7.813" />
                </g>
            </svg>
        </span>
    </section>
</section>
{if !empty($PageBanner.BannerSubContent)}
<section class="BannerSubContent FlexContainer {$PageSlug}">
    <section class="container FlexContainer">
        {if !empty($PageBanner.BannerSubContentIcon)}{$PageBanner.BannerSubContentIcon}{/if}
        {$PageBanner.BannerSubContent}
    </section>
</section>
{/if}
