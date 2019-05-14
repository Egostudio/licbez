{*subcats_images_in_products*}
{* Subcategories preview *}
<div class="preview fn_product mypreview">
    <div class="fn_transfer clearfix">
        {* Subcategories image *}
        <a class="preview_image" href="{$lang_link}category/{$sub->url}">
            {if $sub->image}
                <img src="{$sub->image|resize:320:320:false:$config->resized_categories_dir}" alt="{$sub->name|escape}" title="{$sub->name|escape}">
            {else}
                <img width="320" height="320" src="design/{$settings->theme}/images/no_image.png" alt="{$sub->name|escape}" title="{$sub->name|escape}"/>
            {/if}
        </a>
        {* Subcategories name *}
        <a class="product_name" data-product="{$sub->id}" href="{$lang_link}category/{$sub->url}">{$sub->name|escape}</a>
    </div>
</div>
{*/subcats_images_in_products*}
