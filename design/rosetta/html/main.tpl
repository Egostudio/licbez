{* The main page template *}
{* The canonical address of the page *}

{$canonical="" scope=parent}

<div class="row">
    <div class="col-xs-12 col-lg-3 home_categories">
        {include file="categories.tpl"}
    </div>
    <div class="col-xs-12 col-lg-9">
        {* Banners *}
        {get_banner var=banner_group1 group='group1'}
        {if $banner_group1->items}
            <div class="fn_slider main_slider">
                {foreach $banner_group1->items as $bi}
                    <div class="slick-slide">
                        {if $bi->url}
                        <a href="{$bi->url}" target="_blank">
                            {/if}
                            {if $bi->image}
                                <img src="{$config->banners_images_dir}{$bi->image}" alt="{$bi->alt}" title="{$bi->title}"/>
                            {/if}
                            {if $bi->url}
                        </a>
                        {/if}
                    </div>
                {/foreach}
            </div>
        {/if}
    </div>
</div>

{* Discount products *}
{get_discounted_products var=discounted_products limit=20}
{if $discounted_products}
    <div class="h2">
        <span data-language="main_discount_products">{$lang->main_discount_products}</span>
        <a class="look_all"  href="{$lang_link}discounted" data-language="main_look_all">{$lang->main_look_all}</a>
    </div>

    <div class="fn_slider_products slider_products clearfix">
        {foreach $discounted_products as $product}
            <div class="products_item slick-slide">
                {include "product_list.tpl"}
            </div>
        {/foreach}
    </div>
{/if}

{* Featured products *}
{get_featured_products var=featured_products limit=20}
{if $featured_products}
    <div class="h2">
        <span data-language="main_recommended_products">{$lang->main_recommended_products}</span>
        <a class="look_all" href="{$lang_link}bestsellers" data-language="main_look_all">{$lang->main_look_all}</a>
    </div>

    <div class="fn_slider_products slider_products clearfix">
        {foreach $featured_products as $product}
            <div class="products_item slick-slide">
                {include "product_list.tpl"}
            </div>
        {/foreach}
    </div>
{/if}

{* New products *}
{get_new_products var=new_products limit=20 sort=date_add}
{if $new_products}
    <div class="h2">
        <span data-language="main_new_products">{$lang->main_new_products}</span>
        <a class="look_all" href="{$lang_link}novye-tovary" data-language="main_look_all">{$lang->main_look_all}</a>
    </div>

    <div class="fn_slider_products slider_products clearfix">
        {foreach $new_products as $product}
            <div class="products_item slick-slide">
                {include "product_list.tpl"}
            </div>
        {/foreach}
    </div>
{/if}


{* Last posts *}
{get_posts var=last_posts limit=2 type_post="news"}
{if $last_posts}
    <div class="mb">
        <div class="h2">
            <span data-language="main_news">{$lang->main_news}</span>
            <a class="look_all" href="{$lang_link}news" data-language="main_all_news">{$lang->main_all_news}</a>
        </div>

        <div class="news clearfix">
            {foreach $last_posts as $post}
                <div class="news_item no_padding col-sm-6 col-md-4 cpl-xl-3">
                    <a class="news_image" href="{$lang_link}{$post->type_post}/{$post->url}">
                        {if $post->image}
                            <img class="news_img" src="{$post->image|resize:360:360:false:$config->resized_blog_dir}" alt="{$post->name|escape}" title="{$post->name|escape}"/>
                        {/if}
                    </a>

                    <div class="news_content">
                        {* News date *}
                        <div class="news_date"><span>{$post->date|date}</span></div>

                        {* News name *}
                        <h2 class="h4">
                            <a href="{$lang_link}{$post->type_post}/{$post->url}" data-post="{$post->id}">{$post->name|escape}</a>
                        </h2>

                        {* News annotation *}
                        {*
                        {if $post->annotation}
                            <div class="news_annotation">{$post->annotation}</div>
                        {/if}
                        *}

                    </div>
                </div>
            {/foreach}
        </div>
    </div>
{/if}

{* Page content *}
{if $page->description}
    <div class="h2">
        <h1>{$page->name|escape}</h1>
    </div>

    <div class="home_text clearfix">

        {$page->description}

    </div>
{/if}

<script src="design/{$settings->theme}/js/readmore.js"></script>
    {literal}
<script>
  $('.home_text').readmore({
    moreLink: '<a href="#" class="h32" style="font-size: 18px; margin-bottom: 10px;">Читать полностью</a>',
    lessLink: '<a href="#"></a>',
    collapsedHeight: 200,
    afterToggle: function(trigger, element, expanded) {
      if(! expanded) {
        $('html, body').animate({scrollTop: element.offset().top}, {duration: 100});
      }
    }
  });

  $('article').readmore({speed: 500});
</script>
    {/literal}
