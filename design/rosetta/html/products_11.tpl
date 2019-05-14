{* The Categories page *}

{* The canonical address of the page *}
{if $set_canonical || $self_canonical}
    {if $category}
        {$canonical="/category/{$category->url}" scope=parent}
    {elseif $brand}
        {$canonical="/brands/{$brand->url}" scope=parent}
    {elseif $page->url=='discounted'}
        {$canonical="/discounted" scope=parent}
    {elseif $page->url=='bestsellers'}
        {$canonical="/bestsellers" scope=parent}
    {elseif $keyword}
        {$canonical="/all-products" scope=parent}
    {else}
        {$canonical="/all-products" scope=parent}
    {/if}
{/if}


{* The page heading *}
{if $keyword}
    <h1 class="h1"><span data-language="products_search">{$lang->products_search}</span> {$keyword|escape}</h1>
{elseif $page}
    <h1 class="h1">
        <span data-page="{$page->id}">{$page->name|escape}</span>
    </h1>
{else}
    <h1 class="h1"><span data-category="{$category->id}">{if $category->name_h1|escape}{$category->name_h1|escape}{else}{$category->name|escape}{/if}</span> {$brand->name|escape} {$filter_meta->h1|escape}</h1>
{/if}

{if $current_page_num == 1 && ($category->annotation || $brand->annotation)}
    <div class="mb">
        {* Краткое описание категории *}
        {$category->annotation}

        {* Краткое описание бренда *}
        {$brand->annotation}
    </div>
{/if}

{*subcats_images_in_products*}
{$count_subs_visible = 0}
{if $category->level_depth<6}
    {$subs = $category->subcategories}
    {foreach $subs as $sub}
        {if $sub->visible}
            {$count_subs_visible = $count_subs_visible+1}
        {/if}
    {/foreach}
{/if}
    {if (($category->level_depth<6) && $count_subs_visible!=0)}
    <div id="fn_products_content" class="fn_categories products clearfix">
        {include file="subcategories_content.tpl"}
    </div>
    {else}

{if $products}
    {* Product Sorting *}
    <div class="fn_products_sort">
        {include file="products_sort.tpl"}
    </div>
{/if}

{* Product list *}
<div id="fn_products_content" class="fn_categories products clearfix">
    {include file="products_content.tpl"}
</div>

{if $products}
    {* Friendly URLs Pagination *}
    <div class="fn_pagination">
        {include file='chpu_pagination.tpl'}
    </div>
{/if}

{if $page->description}
    <div class="page_descrip">
        {$page->description}
    </div>
{/if}

{/if}
    {if $current_page_num == 1
      && (!$category || !$brand)
      && ($category->description || $brand->description || $category->description_bottom)
      && !$page_all
      && !$attr_f
    }
    <div class="mb">
            {* Описание категории *}
            {$category->description}
            {if $category->description_top1}
            <br />
            {$category->description_top1}
            {/if}
            {if $category->description_bottom}
            {$category->description_bottom}
            {/if}
            {* Описание бренда *}
            {$brand->description}
    </div>
{/if}
