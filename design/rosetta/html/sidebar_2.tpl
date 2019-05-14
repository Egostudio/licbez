{* Catalog menu *}
{include file="categories.tpl"}

<div class="aside_block">
    {* Breadcrumbs *}
    {include file='breadcrumb.tpl'}
</div>

{$count_subs_visible = 0}
{if $category->level_depth==1 || $category->level_depth==2}
    {$subs = $category->subcategories}
    {foreach $subs as $sub}
        {if $sub->visible}
            {$count_subs_visible = $count_subs_visible+1}
        {/if}
    {/foreach}
{/if}

{if $module == "ProductsView" && ($category->level_depth>2 || !$count_subs_visible)}
    {include file='features.tpl'}
{/if}

{if $is_mobile === false && $is_tablet === false}
    {if $module == "BlogView"}
        {get_posts var=last_posts limit=5 type_post="news"}
        {if $last_posts}
            <div class="tablet-hidden aside_block">
                <div class="h4">
                    <span data-language="blog_news">{$lang->blog_news}</span>
                </div>

                {foreach $last_posts as $post}
                    <article class="side_blog">{* News name *}
                        {* News date *}
                        <p class="news_date">{$post->date|date}</p>
                        <h3 class="h5">
                            <a href="{$lang_link}{$post->type_post}/{$post->url}" data-post="{$post->id}">{$post->name|escape}</a>
                        </h3>
                    </article>
                {/foreach}

                <div class="side_all">
                    <a href="{$lang_link}news" data-language="main_all_news">{$lang->main_all_news}</a>
                </div>
            </div>
        {/if}

        {get_posts var=last_posts limit=5 type_post="blog"}
        {if $last_posts}
            <div class="tablet-hidden aside_block">
                <div class="h4">
                    <span data-language="blog_blog">{$lang->blog_blog}</span>
                </div>

                {foreach $last_posts as $post}
                    <article class="side_blog">{* News name *}
                        {* News date *}
                        <p class="news_date">{$post->date|date}</p>
                        <h3 class="h5">
                            <a href="{$lang_link}{$post->type_post}/{$post->url}" data-post="{$post->id}">{$post->name|escape}</a>
                        </h3>
                    </article>
                {/foreach}

                <div class="side_all">
                    <a href="{$lang_link}news" data-language="all_articles">{$lang->all_articles}</a>
                </div>
            </div>
        {/if}
    {/if}

    {* Browsed products *}
    {get_browsed_products var=browsed_products limit=4}
    {if $browsed_products}
        <div class="tablet-hidden">
            <div class="h4">{$lang->features_browsed}</div>
            <div class="browsed clearfix">
                {foreach $browsed_products as $browsed_product}
                    <div class="browsed_item clearfix">
                        <a class="browsed_image" href="{$lang_link}products/{$browsed_product->url}">
                            {if $browsed_product->image->filename}
                                <img src="{$browsed_product->image->filename|resize:50:60}" alt="{$browsed_product->name|escape}" title="{$browsed_product->name|escape}">
                            {else}
                                <img width="50" height="50" src="design/{$settings->theme}/images/no_image.png" alt="{$browsed_product->name|escape}" title="{$browsed_product->name|escape}"/>
                            {/if}
                        </a>
                        <a class="browsed_name" href="{$lang_link}products/{$browsed_product->url}">{$browsed_product->name|escape}</a>
                    </div>
                {/foreach}
            </div>
        </div>
    {/if}
{/if}
