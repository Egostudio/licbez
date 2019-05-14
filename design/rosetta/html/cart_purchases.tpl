{foreach $cart->purchases as $purchase}
    <div class="clearfix purchase_item">
        {* Remove button *}
        <div class="purchase_remove">
            <a href="{$lang_link}cart/remove/{$purchase->variant->id}" onclick="ajax_remove({$purchase->variant->id});return false;" title="{$lang->cart_remove}">
                {include file="svg.tpl" svgId="remove_icon"}
            </a>
        </div>
        <div class="purchase_inner clearfix">
            {* Product image *}
            <div class="purchase_image">
                {$image = $purchase->product->images|first}
                <a href="{$lang_link}products/{$purchase->product->url}">
                    {if $image}
                        <img src="{$image->filename|resize:110:110}" alt="{$purchase->product->name|escape}" title="{$purchase->product->name|escape}">
                    {else}
                        <img width="110" height="110" src="design/{$settings->theme}/images/no_image.png" alt="{$purchase->product->name|escape}" title="{$purchase->product->name|escape}">
                    {/if}
                </a>
            </div>

            <div class="purchase_info clrerfix">
                {* Product name *}
                <a class="purchase_name" href="{$lang_link}products/{$purchase->product->url}">{$purchase->product->name|escape} <span>{$purchase->variant->name|escape}</span>
                {if $purchase->variant->stock == 0}<span class="purchase_preorder">{$lang->product_pre_order}</span>{/if}</a>

                <div class="purchase_units">
                    {* Price per unit *}
                    <div class="purchase_price">{($purchase->variant->price)|convert} <span class="price_currency">{$currency->sign} {if $purchase->variant->units}/ {$purchase->variant->units|escape}{/if}</span></div>

                    {* Quantity *}
                    <div class="amount fn_product_amount{if $settings->is_preorder} fn_is_preorder{/if}">
                        <span class="minus">&minus;</span>
                        <input class="input_amount" type="text" data-id="{$purchase->variant->id}" name="amounts[{$purchase->variant->id}]" value="{$purchase->amount}" onblur="ajax_change_amount(this, {$purchase->variant->id});" data-max="{$purchase->variant->stock}">
                        <span class="plus">&plus;</span>
                    </div>
                </div>

                {* Extended price *}
                <span class="purchase_sum nowrap"><span>{($purchase->variant->price*$purchase->amount)|convert}</span> {$currency->sign}</span>
            </div>
        </div>
    </div>
{/foreach}

{* Discount *}
{if $user->discount}
    <div class="clearfix purchase_item discount">
        <span data-language="cart_discount">{$lang->cart_discount}:</span>
        <span class="discount_sum">{$user->discount}%</span>
    </div>
{/if}

{* Coupon *}
{if $coupon_request}
    {if $cart->coupon_discount > 0}
        <div class="clearfix purchase_item discount">
            <span data-language="cart_coupon">{$lang->cart_coupon} {$cart->coupon->coupon_percent|escape} %:</span>
            <span class="discount_sum">&minus; {$cart->coupon_discount|convert} {$currency->sign|escape}</span>
        </div>
    {/if}
{/if}

{* Total *}
<div class="clearfix purchase_footer">
    {* Coupon *}
    {if $coupon_request}
        <div class="coupon_field">
            {* Coupon field *}
            <input class="fn_coupon input_coupon" type="text" name="coupon_code" value="{$cart->coupon->code|escape}" placeholder="{$lang->cart_coupon}">

            <input class="button fn_sub_coupon" type="button" value="{$lang->cart_purchases_coupon_apply}">

            {* Coupon error messages *}
            {if $coupon_error}
                <div class="message_error">
                    {if $coupon_error == 'invalid'}
                        {$lang->cart_coupon_error}
                    {/if}
                </div>
            {/if}
            {if $cart->coupon->min_order_price > 0}
                <div class="message_error">
                    {$lang->cart_coupon} {$cart->coupon->code|escape} {$lang->cart_coupon_min} {$cart->coupon->min_order_price|convert} {$currency->sign|escape}
                </div>
            {/if}
        </div>
    {/if}

    <div class="purchase_total">
        <span data-language="cart_total_price">{$lang->cart_total_price}:</span>
        <span class="total_sum nowrap">{$cart->total_price|convert} {$currency->sign|escape}</span>
    </div>
</div>
