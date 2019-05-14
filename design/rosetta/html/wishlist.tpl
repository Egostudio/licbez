{* page title *}
{$meta_title = $lang->wishlist_title scope=parent}

{* Page heading *}
<h1 class="h1">
    <span data-language="wishlist_header">{$lang->wishlist_header}</span>
</h1>

{if $page->description}
    <div class="mb">
        {$page->description}
    </div>
{/if}

{if $wished_products|count}
    <div class="fn_wishlist_page products clearfix">
        {* Список избранных товаров *}
        {foreach $wished_products as $product}
            <div class="products_item no_padding col-sm-6 col-md-4">
                {include "product_list.tpl"}
            </div>
        {/foreach}
    </div>
{else}
    <div class="mb">
        <span data-language="wishlist_empty">{$lang->wishlist_empty}</span>
    </div>
{/if}
