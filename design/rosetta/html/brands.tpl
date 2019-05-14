{* The brand page template *}

{* The canonical address of the page *}
{$canonical="/brands" scope=parent}

{* The page heading *}
<h1 class="h1" data-page="{$page->id}">{$page->name|escape}</h1>

{* The list of the brands *}
{if $brands}
    <div class="brands clearfix">
        {foreach $brands as $b}
            <div class="brand_item no_padding col-xs-6 col-sm-4 col-xl-3">
                <a class="brand_link" data-brand="{$b->id}" href="{$lang_link}brands/{$b->url}">
                    {if $b->image}
                        <div class="brand_image">
                            <img class="brand_img" src="{$b->image|resize:200:98:false:$config->resized_brands_dir}" alt="{$b->name|escape}" title="{$b->name|escape}">
                        </div>
                    {else}
                        <div class="brand_name">
                            <span>{$b->name|escape}</span>
                        </div>
                    {/if}
                </a>
            </div>
        {/foreach}
    </div>
{/if}

{* The page body *}
{if $page->description}
    <div class="block">
        {$page->description}
    </div>
{/if}
