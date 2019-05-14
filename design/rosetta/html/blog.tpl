{* The blog page template *}

{* The canonical address of the page *}
{if $smarty.get.type_post == "blog"}
    {$canonical="/blog" scope=parent}
    {else}
    {$canonical="/news" scope=parent}
{/if}

{* The page heading *}
<h1 class="h1" data-page="{$page->id}">{$page->name|escape}</h1>

{* The list of the blog posts *}
<div class="blog clearfix">
    {foreach $posts as $post}
        <article class="blog_item no_padding col-sm-6 col-md-4">

            {* The post image *}
            <a class="blog_image" href="{$lang_link}{$smarty.get.type_post}/{$post->url}">
                {if $post->image}
                    <img class="blog_img" src="{$post->image|resize:360:360:false:$config->resized_blog_dir}" alt="{$post->name|escape}" title="{$post->name|escape}">
                {/if}
            </a>

            <div class="blog_content">
                {* The post date *}
                <div class="blog_date"><span>{$post->date|date}</span></div>

                {* The post name *}
                <h2 class="h4">
                    <a href="{$lang_link}{$smarty.get.type_post}/{$post->url}" data-post="{$post->id}">{$post->name|escape}</a>
                </h2>
            </div>
        </article>
    {/foreach}
</div>

{* Pagination *}
{include file='pagination.tpl'}
