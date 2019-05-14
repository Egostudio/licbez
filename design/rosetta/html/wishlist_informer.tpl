{* Информер избранного (отдаётся аяксом) *}
{if $wished_products|count > 0}
    <a class="wish_info" href="{$lang_link}wishlist">
        <span data-language="wishlist_header">{$lang->wishlist_header}</span> <span class="wish_counter">{$wished_products|count}</span>
    </a>
{else}
    <span class="wish_info">
        <span data-language="wishlist_header">{$lang->wishlist_header}</span>
    </span>
{/if}
