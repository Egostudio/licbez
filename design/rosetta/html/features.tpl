{* Filters *}
{if ($category->brands || $prices || $features)  && $products|count > 0}
    <div class="filters_heading fn_switch lg-hidden">
        <span data-language="filters">{$lang->filters}</span>
    </div>

    <div class="filters tablet-hidden">
        {* Ajax Price filter *}
        {if $prices && $products|count > 0}
            <div class="filter_name">
                <span data-language="features_price">{$lang->features_price}</span>
            </div>

            <div class="filter_group">
                {* Price slider *}
                <div id="fn_slider_price"></div>

                {* Price range *}
                <div class="price_range">
                    <input class="min_input" id="fn_slider_min" name="p[min]" value="{($prices->current->min|default:$prices->range->min)|escape}" data-price="{$prices->range->min}" type="text">
                    &ndash;
                    <input class="max_input" id="fn_slider_max" name="p[max]" value="{($prices->current->max|default:$prices->range->max)|escape}" data-price="{$prices->range->max}" type="text">
                    {$currency->sign|escape}
                </div>
            </div>
        {/if}

        {* Brand filter *}
        {if $category->brands}
            {* Brand name *}
            <div class="filter_name">
                <span data-language="features_manufacturer">{$lang->features_manufacturer}</span>
            </div>
            <div class="filter_group">
                {* Display all brands *}
                <div class="filter_item">
                    {$furl = {furl params=[brand=>null, page=>null]}}
                    <{$link_tag} class="filter_link{if $link_tag=='span'} fn_filter_link{/if}{if !$brand->id && !$smarty.get.b} checked{/if}" href="{$furl}">
                        <i class="filter_indicator"></i>
                        <span data-language="features_all">{$lang->features_all}</span>
                    </{$link_tag}>
                </div>
                {* Brand list *}
                {foreach $category->brands as $b}
                    <div class="filter_item">
                        {$furl = {furl params=[brand=>$b->url, page=>null]}}
                        <{$link_tag} class="filter_link{if $link_tag=='span'} fn_filter_link{/if}{if $brand->id == $b->id || $smarty.get.b && in_array($b->id,$smarty.get.b)} checked{/if}" href="{$furl}">
                             <i class="filter_indicator"></i>
                            <span>{$b->name|escape} ({$b->count_products})</span>
                        </{$link_tag}>
                    </div>
                {/foreach}
            </div>
        {/if}

        {* Features filter *}
        {if $features}
            {foreach $features as $key=>$f}
                {* Feature name *}
                <div class="filter_name" data-feature="{$f->id}">{$f->name|escape}</div>

                <div class="filter_group">
                    {* Display all features *}
                    <div class="filter_item">
                        {$furl = {furl params=[$f->url=>null, page=>null]}}
                        <{$link_tag} class="filter_link{if $link_tag=='span'} fn_filter_link{/if}{if !$smarty.get.$key} checked{/if}" href="{$furl}">
                            <i class="filter_indicator"></i>
                            <span data-language="features_all">{$lang->features_all}</span>
                        </{$link_tag}>
                    </div>
                    {* Feture value *}
                    {foreach $f->options as $o}
                        <div class="filter_item">
                            {$furl = {furl params=[$f->url=>$o->translit, page=>null]}}
                            <{$link_tag} class="filter_link{if $link_tag=='span'} fn_filter_link{/if}{if $smarty.get.{$f@key} && in_array($o->translit,$smarty.get.{$f@key})} checked{/if}" href="{$furl}">
                                <i class="filter_indicator"></i>
                                <span>{$o->value|escape} ({$o->count})</span>
                            </{$link_tag}>
                        </div>
                    {/foreach}

                </div>
            {/foreach}
        {/if}
    </div>
{/if}
