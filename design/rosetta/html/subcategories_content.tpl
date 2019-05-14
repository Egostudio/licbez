{*subcats_images_in_products*}
{foreach $category->subcategories as $sub}
    {if $sub->visible}
        <div class="subcategories no_padding products_item col-sm-6 col-xl-3">
            {include file="subcategories_list.tpl"}
        </div>
    {/if}
{/foreach}
{*/subcats_images_in_products*}
