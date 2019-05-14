{* Compaison informer (given by Ajax) *}
{if $comparison->products|count > 0}
    <a class="compare_info" href="{$lang_link}comparison">
        <span data-language="index_comparison">{$lang->index_comparison}</span>
        <span class="compare_counter">{$comparison->products|count}</span>
    </a>
{else}
    <div class="compare_info">
        <span data-language="index_comparison">{$lang->index_comparison}</span>
    </div>
{/if}
