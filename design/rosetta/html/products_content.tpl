{if $products}
    {foreach $products as $product}
        <div class="no_padding products_item col-md-4">
            {include file="product_list.tpl"}
        </div>
    {/foreach}
{else}
    <span data-language="products_not_found">{$lang->products_not_found}</span>
{/if}
