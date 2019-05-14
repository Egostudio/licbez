{* Cart informer (given by Ajax) *}
{if $cart->total_products > 0}
    <a href="{$lang_link}cart" class="cart_info">
        <span class="cart_counter">{$cart->total_products}</span>
        {if $is_mobile === false && $is_tablet === false}
            <span class="cart_title tablet-hidden" data-language="index_cart">{$lang->index_cart}</span>
        {/if}
    </a>
{else}
    <div class="cart_info">
        <span class="cart_counter">{$cart->total_products}</span>
        {if $is_mobile === false && $is_tablet === false}
            <span class="cart_title tablet-hidden" data-language="index_cart">{$lang->index_cart}</span>
        {/if}
    </div>
{/if}
